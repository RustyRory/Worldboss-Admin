<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil vierge</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Bienvenue sur la page d'accueil !</h1>
    <!-- Bouton pour la connexion avec Discord -->
    <a href="{{ route('login.discord') }}" class="btn btn-primary">
        Se connecter avec Discord
    </a>
</body>
</html>
