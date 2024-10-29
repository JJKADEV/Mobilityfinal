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
        Schema::create('contractuels', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenoms');
            $table->string('telephone')->nullable(); // Champ pour le téléphone
            $table->string('sous_direction')->nullable(); // Champ pour la sous-direction
            $table->string('fonction')->nullable(); // Champ pour la fonction
            $table->string('email')->nullable();
            $table->string('direction')->nullable(); // Champ pour la direction
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractuels');
    }
};
