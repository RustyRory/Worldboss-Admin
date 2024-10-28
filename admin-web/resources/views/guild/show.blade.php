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

    <form action="{{ route('guild.update', $guild->id_discord) }}" method="POST">
        @csrf
        @method('PUT')
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
            
            <!-- Champs modifiables pour les IDs de channel et message -->
            <li>
                <label for="channel_wb_id"><strong>ID channel WorldBoss:</strong></label>
                <input type="text" name="channel_wb_id" id="channel_wb_id" value="{{ $guild->channel_wb_id }}">
            </li>
            <li>
                <label for="message_wb_id"><strong>ID message WorldBoss:</strong></label>
                <input type="text" name="message_wb_id" id="message_wb_id" value="{{ $guild->message_wb_id }}">
            </li>
            <li>
                <label for="channel_city_id"><strong>ID channel Ville:</strong></label>
                <input type="text" name="channel_city_id" id="channel_city_id" value="{{ $guild->channel_city_id }}">
            </li>
            <li>
                <label for="message_city_id"><strong>ID message Ville:</strong></label>
                <input type="text" name="message_city_id" id="message_city_id" value="{{ $guild->message_city_id }}">
            </li>
            <li>
                <label for="message_warrior_id"><strong>ID message Warrior:</strong></label>
                <input type="text" name="message_warrior_id" id="message_warrior_id" value="{{ $guild->message_warrior_id }}">
            </li>
            <li>
                <label for="message_mage_id"><strong>ID message Mage:</strong></label>
                <input type="text" name="message_mage_id" id="message_mage_id" value="{{ $guild->message_mage_id }}">
            </li>
            <li>
                <label for="message_rogue_id"><strong>ID message Rogue:</strong></label>
                <input type="text" name="message_rogue_id" id="message_rogue_id" value="{{ $guild->message_rogue_id }}">
            </li>
            <li>
                <label for="message_adventurer_id"><strong>ID message Aventuriers:</strong></label>
                <input type="text" name="message_adventurer_id" id="message_adventurer_id" value="{{ $guild->message_adventurer_id }}">
            </li>

            <li>
                <label for="channel_graveyard_id"><strong>ID channel Cimetière:</strong></label>
                <input type="text" name="channel_graveyard_id" id="channel_graveyard_id" value="{{ $guild->channel_graveyard_id }}">
            </li>           
        </ul>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>

    @if(session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('guild.players', $guild->id_discord) }}">Voir les Joueurs du Serveur</a>
    <br>
    <a href="{{ url('/dashboard') }}">Retour au Dashboard</a>
</body>
</html>
