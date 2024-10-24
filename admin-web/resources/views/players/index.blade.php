{{-- resources/views/players/index.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Joueurs</title>
</head>
<body>
    <h1>Liste des Joueurs de la Guilde</h1>
    
    <ul>
        @foreach($players as $player)
            <li>
                {{ $player->username }} - ID: {{ $player->player_id }} - Classe: {{ $player->class }} - Niveau: {{ $player->level }} - Vie: {{ $player->life }}
            </li>
        @endforeach
    </ul>
    
    <a href="{{ url()->previous() }}">Retour aux statistiques du Serveur</a>
</body>
</html>
