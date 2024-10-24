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
    <h2>Vos Serveurs :</h2>
    <ul>
        @forelse ($guilds as $guild)
            <li>
                <strong>{{ $guild->name }}</strong> - ID: {{ $guild->id_discord }}
                <br>
                Niveau: {{ $guild->level }} - Dégâts: {{ $guild->damages }} - Banque Guerrier: {{ $guild->warrior_bank }}
            </li>
        @empty
            <li>Aucune guilde trouvée.</li>
        @endforelse
    </ul>
    <a href="{{ url('/logout') }}">Se déconnecter</a>
</body>
</html>

