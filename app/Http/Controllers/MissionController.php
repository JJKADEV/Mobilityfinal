<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Contractuel;
use App\Models\Fonctionnaire;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    // Affiche le formulaire de création de mission
    public function create()
    {
        return view('missions.create');
    }

    // Recherche d'un agent par matricule ou nom (AJAX)
    public function findAgent(Request $request)
    {
        $matricule = $request->input('matricule');
        $nom = $request->input('nom');

        if ($matricule) {
            $agent = Contractuel::where('matricule', $matricule)->first()
                     ?? Fonctionnaire::where('matricule', $matricule)->first();
            if ($agent) {
                return response()->json($agent); // Retourne l'agent unique
            }
        }

        if ($nom) {
            $agents = Contractuel::where('nom_prenoms', 'LIKE', "%$nom%")
                        ->get()
                        ->merge(Fonctionnaire::where('nom_prenoms', 'LIKE', "%$nom%")->get());
            
            if ($agents->isNotEmpty()) {
                return response()->json($agents);
            }
        }

        return response()->json(['error' => 'Aucun agent trouvé'], 404);
    }

    // Enregistre une nouvelle mission
    public function store(Request $request)
    {
        // Validation des données de la mission
        $request->validate([
            'objet' => 'required',
            'type_mission' => 'nullable',
            'nom_complet' => 'required',  // Ajusté pour correspondre au nom du champ dans la vue
            'prenoms' => 'required',
            'matricule' => 'required',
            'service' => 'required',
            'emploi' => 'required',
            'fonction' => 'required',
            'categorie' => 'required',
            'grade' => 'nullable',
            'groupe' => 'nullable',
            'nom_donneur_ordre' => 'required',
            'poste_donneur_ordre' => 'required',
            'heure_depart' => 'required',
            'partant_de' => 'required',
            'en_deplacement' => 'required',
            'date_depart' => 'required|date',
            'destination' => 'required',
            'date_arrivee' => 'required|date',
            'date_retour' => 'required|date',
            'imputation_budgetaire' => 'required',
            'description' => 'nullable',
        ]);

        // Création de la mission
        Mission::create([
            'nom' => $request->input('nom_complet'),  // Ajustement pour utiliser le champ nom_complet
            'prenoms' => $request->input('prenoms'),
            'matricule' => $request->input('matricule'),
            'service' => $request->input('service'),
            'emploi' => $request->input('emploi'),
            'fonction' => $request->input('fonction'),
            'categorie' => $request->input('categorie'),
            'grade' => $request->input('grade'),
            'groupe' => $request->input('groupe'),
            'objet' => $request->input('objet'),
            'type_mission' => $request->input('type_mission'),
            'heure_depart' => $request->input('heure_depart'),
            'partant_de' => $request->input('partant_de'),
            'en_deplacement' => $request->input('en_deplacement'),
            'date_depart' => $request->input('date_depart'),
            'destination' => $request->input('destination'),
            'date_arrivee' => $request->input('date_arrivee'),
            'date_retour' => $request->input('date_retour'),
            'heure_retour' => $request->input('heure_retour'),
            'nom_donneur_ordre' => $request->input('nom_donneur_ordre'),
            'poste_donneur_ordre' => $request->input('poste_donneur_ordre'),
            'imputation_budgetaire' => $request->input('imputation_budgetaire'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'Mission créée avec succès !');
    }

    // Recherche d'un agent par ID
    public function getAgentById(Request $request)
    {
        $id = $request->input('id');
        $agent = Contractuel::find($id) ?? Fonctionnaire::find($id);

        if ($agent) {
            return response()->json($agent);
        }

        return response()->json(['error' => 'Agent non trouvé'], 404);
    }
}
