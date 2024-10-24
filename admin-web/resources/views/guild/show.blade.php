{{-- resources/views/guild/show.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Guilde</title>
</head>
<body>
    <h1>Statistiques de la Guilde: {{ $guild->name }}</h1>
    <ul>
        <li><strong>ID de la Guilde:</strong> {{ $guild->id_discord }}</li>
        <li><strong>Propriétaire:</strong> {{ $guild->id_owner }}</li>
        <li><strong>Niveau:</strong> {{ $guild->level }}</li>
        <li><strong>Dégâts:</strong> {{ $guild->damages }}</li>
        <li><strong>Dégâts Maximum:</strong> {{ $guild->max_damages }}</li>
        <li><strong>Dégâts Totaux:</strong> {{ $guild->all_damages }}</li>
        <li><strong>Timeout:</strong> {{ $guild->timeout }}</li>
        <li><strong>Cycle:</strong> {{ $guild->cycle }}</li>
        <li><strong>Banque Guerrier:</strong> {{ $guild->warrior_bank }}</li>
        <li><strong>Banque Mage:</strong> {{ $guild->mage_bank }}</li>
        <li><strong>Banque Voleur:</strong> {{ $guild->rogue_bank }}</li>
        <li><strong>Banque Aventurier:</strong> {{ $guild->adventurer_bank }}</li>
    </ul>
    
    <a href="{{ url('/dashboard') }}">Retour au Dashboard</a>
</body>
</html>
