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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            
            // Informations de l'agent
            $table->string('nom'); // Nom de l'agent
            $table->string('prenoms'); // Prénoms de l'agent
            $table->string('matricule'); // Matricule de l'agent
            $table->string('service'); // Service de l'agent
            $table->string('emploi'); // Emploi de l'agent
            $table->string('fonction'); // Fonction de l'agent
            $table->string('categorie'); // Catégorie de l'agent
            $table->string('grade')->nullable(); // Grade de l'agent (facultatif)
            $table->string('groupe')->nullable(); // Groupe de l'agent (facultatif)
        
            // Donneur d'ordre
            $table->string('nom_donneur_ordre'); // Nom du donneur d'ordre de Mission
            $table->string('poste_donneur_ordre'); // Poste du donneur d'ordre de Mission
        
            // Détails de la mission
            $table->string('objet'); // Objet de la mission (obligatoire)
            $table->string('type')->nullable(); // Type de la mission (facultatif)
            $table->time('heure_depart'); // Heure de départ
            $table->time('heure_retour'); // Heure de départ
            $table->string('partant_de'); // Lieu de départ
            $table->string('en_deplacement'); // En déplacement
        
            // Dates de la mission
            $table->date('date_depart'); // Date de départ
            $table->string('destination'); // Destination
            $table->date('date_arrivee'); // Date d'arrivée
            $table->date('date_retour'); // Date de retour
        
            // Informations financières
            $table->string('imputation_budgetaire'); // Imputation budgétaire
        
            // Autres détails
            $table->text('description')->nullable(); // Description (facultatif)
        
            // Statut et validation
            $table->enum('statut', ['en attente', 'validée', 'refusée', 'vérifiée'])->default('en attente');
        
            // Clés étrangères pour la validation (référencées aux utilisateurs/responsables)
            $table->unsignedBigInteger('superieur_id')->nullable(); // Supérieur
            $table->unsignedBigInteger('responsable_accueil_id')->nullable(); // Responsable accueil
            $table->unsignedBigInteger('responsable_parc_auto_id')->nullable(); // Responsable parc auto
            $table->unsignedBigInteger('controleur_id')->nullable(); // Contrôleur
        
            $table->timestamps(); // Timestamps pour created_at et updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
