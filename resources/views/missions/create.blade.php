<form action="{{ route('missions.store') }}" method="POST">
    @csrf
    <!-- Recherche par matricule -->
    <div>
        <label for="matricule">Matricule :</label>
        <input type="text" id="matricule" name="matricule">
    </div>

    <!-- Recherche par nom si le matricule est absent -->
    <div>
        <label for="search_nom">Nom :</label>
        <input type="text" id="search_nom" name="search_nom" placeholder="Rechercher par nom si matricule absent">
        <select id="nom_prenoms_select" style="display:none;"></select>
    </div>

    <!-- Nom et Prénoms automatiquement remplis -->
    <div>
        <label for="nom_complet">Nom :</label>
        <input type="text" id="nom_complet" name="nom_complet" readonly>
    </div>

    <div>
        <label for="prenoms">Prénoms :</label>
        <input type="text" id="prenoms" name="prenoms" readonly>
    </div>

    <!-- Autres champs à remplir manuellement -->
    <div>
        <label for="service">Service :</label>
        <input type="text" id="service" name="service" required>
    </div>

    <div>
        <label for="emploi">Emploi :</label>
        <input type="text" id="emploi" name="emploi" required>
    </div>

    <div>
        <label for="fonction">Fonction :</label>
        <input type="text" id="fonction" name="fonction" required>
    </div>

    <div>
        <label for="categorie">Catégorie :</label>
        <input type="text" id="categorie" name="categorie" required>
    </div>

    <div>
        <label for="grade">Grade :</label>
        <input type="text" id="grade" name="grade">
    </div>

    <div>
        <label for="groupe">Groupe :</label>
        <input type="text" id="groupe" name="groupe">
    </div>

    <div>
        <label for="objet">Objet de la mission :</label>
        <input type="text" id="objet" name="objet" required>
    </div>

    <div>
        <label for="type_mission">Type de la mission :</label>
        <input type="text" id="type_mission" name="type_mission">
    </div>

    <div>
        <label for="heure_depart">Heure de départ :</label>
        <input type="time" id="heure_depart" name="heure_depart" required>
    </div>

    <div>
        <label for="partant_de">Partant de :</label>
        <input type="text" id="partant_de" name="partant_de" required>
    </div>

    <div>
        <label for="en_deplacement">En déplacement :</label>
        <input type="text" id="en_deplacement" name="en_deplacement" required>
    </div>

    <div>
        <label for="date_depart">Date de départ :</label>
        <input type="date" id="date_depart" name="date_depart" required>
    </div>

    <div>
        <label for="destination">Destination :</label>
        <input type="text" id="destination" name="destination" required>
    </div>

    <div>
        <label for="date_arrivee">Date d'arrivée :</label>
        <input type="date" id="date_arrivee" name="date_arrivee" required>
    </div>

    <div>
        <label for="date_retour">Date de retour :</label>
        <input type="date" id="date_retour" name="date_retour" required>
    </div>

    <div>
        <label for="heure_retour">Heure de retour :</label>
        <input type="time" id="heure_retour" name="heure_retour">
    </div>

    <div>
        <label for="nom_donneur_ordre">Nom du donneur d'ordre :</label>
        <input type="text" id="nom_donneur_ordre" name="nom_donneur_ordre" required>
    </div>

    <div>
        <label for="poste_donneur_ordre">Poste du donneur d'ordre :</label>
        <input type="text" id="poste_donneur_ordre" name="poste_donneur_ordre" required>
    </div>

    <div>
        <label for="imputation_budgetaire">Imputation budgétaire :</label>
        <input type="text" id="imputation_budgetaire" name="imputation_budgetaire" required>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>
    </div>

    <button type="submit">Créer la mission</button>
</form>

<!-- Script pour gérer la recherche par matricule et nom -->
<script>
    document.getElementById('matricule').addEventListener('input', rechercherAgent);
    document.getElementById('search_nom').addEventListener('input', rechercherAgent);

    function rechercherAgent() {
        let matricule = document.getElementById('matricule').value.trim();
        let nom = document.getElementById('search_nom').value.trim();

        if (matricule === '' && nom === '') return;

        let param = matricule ? `matricule=${matricule}` : `nom=${nom}`;

        fetch(`/find-agent?${param}`)
            .then(response => response.json())
            .then(data => {
                let select = document.getElementById('nom_prenoms_select');
                select.innerHTML = '';

                if (data.error) {
                    alert(data.error);
                    select.style.display = 'none';
                    return;
                }

                if (Array.isArray(data) && data.length > 1) {
                    select.style.display = 'block';
                    data.forEach(agent => {
                        let option = document.createElement('option');
                        option.value = agent.id;
                        option.textContent = `${agent.nom_prenoms} (${agent.matricule})`;
                        select.appendChild(option);
                    });
                } else if (data && data.nom_prenoms) {
                    remplirChamps(data);
                    select.style.display = 'none';
                }
            })
            .catch(error => console.error('Erreur:', error));
    }

    document.getElementById('nom_prenoms_select').addEventListener('change', function() {
        let agentId = this.value;

        fetch(`/get-agent-by-id?id=${agentId}`)
            .then(response => response.json())
            .then(data => remplirChamps(data))
            .catch(error => console.error('Erreur:', error));
    });

    function remplirChamps(agent) {
        document.getElementById('nom_complet').value = agent.nom_prenoms.split(' ')[0];
        document.getElementById('prenoms').value = agent.nom_prenoms.split(' ').slice(1).join(' ');
    }
</script>
