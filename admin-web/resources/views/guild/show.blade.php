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
        <li><strong>Niveau:</strong> {{ $guild->level }}</li>
        <li><strong>Dégâts:</strong> {{ $guild->damages }}</li>
        <li><strong>Dégâts Maximum:</strong> {{ $guild->max_damages }}</li>
        <li><strong>Dégâts Totaux:</strong> {{ $guild->all_damages }}</li>
        <li><strong>Banque Guerrier:</strong> {{ $guild->warrior_bank }}</li>
        <li><strong>Banque Mage:</strong> {{ $guild->mage_bank }}</li>
        <li><strong>Banque Voleur:</strong> {{ $guild->rogue_bank }}</li>
        <li><strong>Banque Aventurier:</strong> {{ $guild->adventurer_bank }}</li>

        <li><strong>ID channel WorldBoss:</strong> {{ $guild->channel_wb_id }}</li>
        <li><strong>ID message WorldBoss:</strong> {{ $guild->message_wb_id }}</li>

        <li><strong>ID channel Ville:</strong> {{ $guild->channel_city_id }}</li>
        <li><strong>ID message Ville:</strong> {{ $guild->message_city_id }}</li>
        <li><strong>ID message Guerrier:</strong> {{ $guild->message_warrior_id }}</li>
        <li><strong>ID message Mage:</strong> {{ $guild->message_mage_id }}</li>
        <li><strong>ID message Voleur:</strong> {{ $guild->message_rogue_id }}</li>
        <li><strong>ID message Aventurier:</strong> {{ $guild->message_adventurer_id }}</li>

        <li><strong>ID channel Cimetière:</strong> {{ $guild->channel_graveyard_id }}</li>
    </ul>

    <a href="{{ route('guild.players', $guild->id_discord) }}">Voir les Joueurs du Serveur</a>
    <br>
    <a href="{{ url('/dashboard') }}">Retour au Dashboard</a>
</body>
</html>
