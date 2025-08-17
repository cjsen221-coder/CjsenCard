<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            // Informations d'identité
            $table->string('name');                     // Nom complet
            $table->string('gender')->nullable();       // Sexe : homme, femme, autre
            $table->date('birthdate')->nullable();      // Date de naissance
            $table->string('nationality')->nullable();  // Nationalité
            $table->string('address')->nullable();      // Adresse complète
            $table->string('region')->nullable();       // Région d'origine
            $table->string('city')->nullable();         // Ville actuelle

            // Coordonnées
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();

            // Informations liées à la carte
            $table->string('role');                     // Statut dans l'organisation (ex: membre, trésorier...)
            $table->string('avatar')->nullable();       // Photo de profil
            $table->string('slug')->unique();           // Pour URL publique

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
