<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Card extends Model
{
    //
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
        'serial_number', // si tu l'as ajouté à la table
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($card) {
            $card->slug = Str::slug($card->name) . '-' . uniqid();
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
