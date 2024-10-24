<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Bienvenue sur ton Dashboard !</h1>
    <a href="{{ url('/logout') }}">Se déconnecter</a>
    <h2>Vos Serveurs :</h2>
    <ul>
        @forelse ($guilds as $guild)
            <li>
                {{ $guild->name }} (ID: {{ $guild->id_discord }})
                <a href="{{ route('guild.show', $guild->id_discord) }}">Voir les statistiques</a>
            </li>
        @empty
            <li>Aucune guilde trouvée.</li>
        @endforelse
    </ul>
    
</body>
</html>

