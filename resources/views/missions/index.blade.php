<h1>Missions - Statut : {{ ucfirst($statut) }}</h1>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Matricule</th>
            <th>Objet</th>
            <th>Date de départ</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($missions as $mission)
            <tr>
                <td>{{ $mission->nom }}</td>
                <td>{{ $mission->prenoms }}</td>
                <td>{{ $mission->matricule }}</td>
                <td>{{ $mission->objet }}</td>
                <td>{{ $mission->date_depart }}</td>
                <td>{{ $mission->statut }}</td>
                <td>
                    @if($statut === 'en attente')
                        <form action="{{ route('missions.valider', $mission->id) }}" method="POST">
                            @csrf
                            <button type="submit">Valider</button>
                        </form>
                        <form action="{{ route('missions.refuser', $mission->id) }}" method="POST">
                            @csrf
                            <button type="submit">Refuser</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
