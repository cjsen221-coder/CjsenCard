<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birthdate',
        'nationality',
        'address',
        'region',
        'city',
        'email',
        'phone',
        'whatsapp',
        'role',
        'avatar',
        'slug',
        'serial_number',
        'honorMember',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($card) {

            // 1️⃣ Générer un numéro de carte unique (serial_number)
            $lastCard = self::orderBy('id', 'desc')->first();

            if ($lastCard && preg_match('/\d+$/', $lastCard->serial_number, $matches)) {
                $nextNumber = intval($matches[0]) + 1;
            } else {
                $nextNumber = 1;
            }

            $card->serial_number = 'SEN-CJ-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            // 2️⃣ Générer le slug unique basé sur le nom et le numéro de carte
            $baseSlug = Str::slug($card->name . '-' . $card->serial_number);
            $slug = $baseSlug;
            $count = 1;

            // Éviter les doublons
            while (self::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            $card->slug = $slug;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
