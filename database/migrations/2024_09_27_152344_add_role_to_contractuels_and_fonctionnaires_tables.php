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
            $table->string('role')->nullable(); // Ajout de la colonne role dans contractuels
        });
    
        Schema::table('fonctionnaires', function (Blueprint $table) {
            $table->string('role')->nullable(); // Ajout de la colonne role dans fonctionnaires
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contractuels', function (Blueprint $table) {
            $table->dropColumn('role'); // Retirer la colonne role si on rollback la migration
        });
    
        Schema::table('fonctionnaires', function (Blueprint $table) {
            $table->dropColumn('role'); // Retirer la colonne role si on rollback la migration
        });
    }
};
