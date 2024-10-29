<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    // Définir les colonnes que l'on peut remplir directement
    protected $fillable = [
        'nom', 'prenoms', 'matricule', 'service', 'emploi', 'fonction', 
        'categorie', 'grade', 'groupe', 'nom_donneur_ordre', 'poste_donneur_ordre',
        'objet', 'type', 'heure_depart','heure_retour', 'partant_de', 'en_deplacement',
        'date_depart', 'destination', 'date_arrivee', 'date_retour',
        'imputation_budgetaire', 'description', 'statut', 
        'superieur_id', 'responsable_accueil_id', 'responsable_parc_auto_id', 'controleur_id'
        
    ];

    // Relation avec l'agent (qui peut être soit un contractuel, soit un fonctionnaire)
    public function agent()
    {
        return $this->belongsTo(Contractuel::class, 'agent_id')
                    ->orWhere('agent_id', Fonctionnaire::class);
    }

    // Relation avec le supérieur hiérarchique
    public function superieur()
    {
        return $this->belongsTo(Contractuel::class, 'superieur_id');
    }

    // Relation avec le responsable de l'accueil
    public function responsableAccueil()
    {
        return $this->belongsTo(Contractuel::class, 'responsable_accueil_id');
    }

    // Relation avec le responsable du parc auto
    public function responsableParcAuto()
    {
        return $this->belongsTo(Contractuel::class, 'responsable_parc_auto_id');
    }

    // Relation avec le contrôleur
    public function controleur()
    {
        return $this->belongsTo(Contractuel::class, 'controleur_id');
    }
}