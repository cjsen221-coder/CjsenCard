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

            // Serial number unique
            $table->string('serial_number')->unique();

            // Informations d'identité
            $table->string('name');                     
            $table->string('gender')->nullable();      
            $table->date('birthdate')->nullable();     
            $table->string('nationality')->nullable();  
            $table->string('address')->nullable();      
            $table->string('region')->nullable();       
            $table->string('city')->nullable();         

            // Coordonnées
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();

            // Informations liées à la carte
            $table->string('role');                  
            $table->string('avatar')->nullable();       
            $table->string('slug')->unique(); 

            // Membre d'honneur
            $table->string('honorMember');

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
