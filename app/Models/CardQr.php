<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CardQr extends Model
{
    protected $fillable = ['number', 'code', 'card_id', 'assigned_at'];

    protected $casts = ['assigned_at' => 'datetime'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function isAssigned(): bool
    {
        return $this->card_id !== null;
    }

    public function scopeAvailable(Builder $query): Builder
    {
        return $query->whereNull('card_id');
    }

    /** 1 → CJSEN-001 */
    public static function codeFor(int $number): string
    {
        return 'CJSEN-' . str_pad((string) $number, 3, '0', STR_PAD_LEFT);
    }

    /** Accepte "CJSEN-001" ou une URL contenant ce code. */
    public static function extractCode(?string $text): ?string
    {
        if ($text && preg_match('/CJSEN-\d+/i', $text, $m)) {
            return strtoupper($m[0]);
        }

        return null;
    }

    /** Adresse encodée dans le QR (ne contient que le code, aucune donnée perso). */
    public function url(): string
    {
        return rtrim(config('app.url'), '/') . '/q/' . $this->code;
    }

    public function svg(int $size = 600): string
    {
        return (string) QrCode::format('svg')
            ->size($size)
            ->margin(1)
            ->errorCorrection('Q')
            ->generate($this->url());
    }
}
