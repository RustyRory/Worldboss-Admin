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
    <p>Tu es connecté avec succès via Discord.</p>
    <a href="{{ url('/logout') }}">Se déconnecter</a>
</body>
</html>

