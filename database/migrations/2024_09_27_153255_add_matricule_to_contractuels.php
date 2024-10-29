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
        Schema::table('contractuels', function (Blueprint $table) {
            $table->string('matricule')->nullable(); // Ajout de la colonne matricule dans contractuels
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contractuels', function (Blueprint $table) {
            $table->dropColumn('matricule'); // Retirer la colonne role si on rollback la migration
        });
    
    }
};
