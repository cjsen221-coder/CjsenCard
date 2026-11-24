<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('card_qrs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number')->unique();   // 1, 2, 3…
            $table->string('code')->unique();              // CJSEN-001

            // NULL = QR disponible ; renseigné = QR attribué à ce membre.
            // Si la carte est supprimée, le QR redevient disponible.
            $table->foreignId('card_id')->nullable()->unique()
                ->constrained('cards')->nullOnDelete();

            $table->timestamp('assigned_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('card_qrs');
    }
};
