<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardQr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ZipArchive;

class CardQrController extends Controller
{
    /* ------------------------------------------------------------------
     |  PUBLIC : page ouverte quand on scanne le QR de la carte
     ------------------------------------------------------------------ */
    public function resolve(string $code)
    {
        $qr = CardQr::with('card')->where('code', strtoupper($code))->firstOrFail();

        // QR déjà attribué → fiche du membre
        if ($qr->isAssigned()) {
            return redirect()->route('cards.show', $qr->card);
        }

        // QR libre + admin connecté → formulaire d'attribution
        if (auth()->check()) {
            return redirect()->route('qr.assign', $qr->code);
        }

        // QR libre + visiteur → message neutre
        return view('qr.inactive', ['code' => $qr->code]);
    }

    /* ------------------------------------------------------------------
     |  ADMIN : génération et export des QR
     ------------------------------------------------------------------ */
    public function index()
    {
        $qrs = CardQr::with('card:id,name,slug')->orderBy('number')->paginate(50);

        $total = CardQr::count();
        $available = CardQr::available()->count();
        $stats = [
            'total'     => $total,
            'available' => $available,
            'assigned'  => $total - $available,
        ];

        return view('qr.index', compact('qrs', 'stats'));
    }

    public function generate(Request $request)
    {
        $data = $request->validate([
            'count' => 'required|integer|min:1|max:500',
        ]);

        [$first, $last] = DB::transaction(function () use ($data) {
            $start = (int) CardQr::max('number') + 1;
            $now = now();
            $rows = [];

            for ($i = 0; $i < $data['count']; $i++) {
                $n = $start + $i;
                $rows[] = [
                    'number'     => $n,
                    'code'       => CardQr::codeFor($n),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }

            CardQr::insert($rows);

            return [$start, $start + $data['count'] - 1];
        });

        return redirect()->route('qr.index')->with(
            'success',
            'Codes générés : ' . CardQr::codeFor($first) . ' à ' . CardQr::codeFor($last) . '.'
        );
    }

    /** ZIP de SVG (un fichier par code) à importer dans Canva. */
    public function zip(Request $request)
    {
        $request->validate([
            'from' => 'nullable|integer|min:1',
            'to'   => 'nullable|integer|min:1',
        ]);

        $query = CardQr::available()->orderBy('number');

        if ($request->filled('from')) {
            $query->where('number', '>=', (int) $request->input('from'));
        }
        if ($request->filled('to')) {
            $query->where('number', '<=', (int) $request->input('to'));
        }

        $qrs = $query->get();

        if ($qrs->isEmpty()) {
            return back()->with('error', 'Aucun QR code disponible dans cette plage.');
        }

        $path = storage_path('app/qr-' . Str::random(8) . '.zip');

        // dd([
        //     'PHP_VERSION' => PHP_VERSION,
        //     'PHP_SAPI' => PHP_SAPI,
        //     'PHP_INI' => php_ini_loaded_file(),
        //     'PHP_INI_SCANNED' => php_ini_scanned_files(),
        //     'EXTENSION_DIR' => ini_get('extension_dir'),
        //     'ZIP_LOADED' => extension_loaded('zip'),
        //     'ZIP_CLASS' => class_exists('ZipArchive'),
        //     'ZIP_MODULE' => phpversion('zip'),
        // ]);

        $zip = new ZipArchive();
        $zip->open($path, ZipArchive::CREATE | ZipArchive::OVERWRITE);
        foreach ($qrs as $qr) {
            $zip->addFromString($qr->code . '.svg', $qr->svg());
        }
        $zip->close();

        return response()->download($path, 'qr-cjsen.zip')->deleteFileAfterSend(true);
    }

    /** Un seul QR en SVG. */
    public function svg(string $code)
    {
        $qr = CardQr::where('code', strtoupper($code))->firstOrFail();

        return response($qr->svg(), 200, [
            'Content-Type'        => 'image/svg+xml',
            'Content-Disposition' => 'attachment; filename="' . $qr->code . '.svg"',
        ]);
    }

    /* ------------------------------------------------------------------
     |  ADMIN : scan + attribution
     ------------------------------------------------------------------ */
    public function scan()
    {
        return view('qr.scan');
    }

    public function assignForm(string $code)
    {
        $qr = CardQr::with('card')->where('code', strtoupper($code))->firstOrFail();

        if ($qr->isAssigned()) {
            return redirect()->route('cards.show', $qr->card);
        }

        return view('qr.assign', compact('qr'));
    }

    public function assign(Request $request, string $code)
    {
        $data = $request->validate($this->rules());
        unset($data['avatar']);

        $card = DB::transaction(function () use ($request, $code, $data) {
            // Verrou : empêche deux attributions simultanées du même QR
            $qr = CardQr::where('code', strtoupper($code))->lockForUpdate()->firstOrFail();

            if ($qr->isAssigned()) {
                return null;
            }

            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $filename = time() . '_' . Str::random(6) . '.' . $file->extension();
                $file->move(public_path('storage/avatars'), $filename);
                $data['avatar'] = 'avatars/' . $filename;
            }

            // serial_number et slug sont générés par le hook "creating" de Card
            // On neutralise le hook "creating" : le n° de carte = le code du QR
            $card = Card::withoutEvents(function () use ($data, $qr) {
                $base = Str::slug($data['name'] . '-' . $qr->code);
                $slug = $base;
                $i = 1;
                while (Card::where('slug', $slug)->exists()) {
                    $slug = $base . '-' . $i++;
                }

                return Card::create($data + [
                    'serial_number' => $qr->code,   // CJSEN-001
                    'slug'          => $slug,
                ]);
            });

            $qr->update([
                'card_id'     => $card->id,
                'assigned_at' => now(),
            ]);

            return $card;
        });

        if (! $card) {
            return redirect()->route('qr.resolve', strtoupper($code))
                ->with('error', 'Ce QR code vient d’être attribué.');
        }

        return redirect()->route('cards.show', $card)
            ->with('success', 'QR code attribué à ' . $card->name . '.');
    }

    private function rules(): array
    {
        return [
            'name'        => 'required|string|max:255',
            'gender'      => 'nullable|string|in:Homme,Femme,Autre|max:10',
            'birthdate'   => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'address'     => 'nullable|string|max:255',
            'region'      => 'nullable|string|max:255',
            'city'        => 'nullable|string|max:255',
            'role'        => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable|string|max:50',
            'whatsapp'    => 'nullable|string|max:50',
            'avatar'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'honorMember' => 'required|string|max:255',
        ];
    }
}
