<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Guilds</h1>
    <table>
        <thead>
            <tr>
                <th>Guild ID</th>
                <th>channel_wb_id</th>
                <th>channel_city_id</th>
                <th>channel_graveyard_id</th>
                <th>Level</th>
                <th>damages</th>
                <th>timeout</th>
                <th>tiime</th>
                <th>city_id</th>
                <th>warrior_id</th>
                <th>mage_id</th>
                <th>rogue_id</th>
                <th>adventurer_id</th>
                <th>warrior_bank</th>
                <th>mage_bank</th>
                <th>rogue_bank</th>
                <th>adventurer_bank</th>

                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            @foreach($guilds as $guild)
                <tr>
                    <td>{{ $guild->guild_id }}</td>
                    <td>{{ $guild->channel_wb_id }}</td>
                    <td>{{ $guild->channel_city_id }}</td>
                    <td>{{ $guild->channel_graveyard_id }}</td>
                    <td>{{ $guild->level }}</td>
                    <td>{{ $guild->damages }}</td>
                    <td>{{ $guild->timeout }}</td>
                    <td>{{ $guild->tiime }}</td>
                    <td>{{ $guild->city_id }}</td>
                    <td>{{ $guild->warrior_id }}</td>
                    <td>{{ $guild->mage_id }}</td>
                    <td>{{ $guild->rogue_id }}</td>
                    <td>{{ $guild->adventurer_id }}</td>
                    <td>{{ $guild->warrior_bank }}</td>
                    <td>{{ $guild->mage_bank }}</td>
                    <td>{{ $guild->rogue_bank }}</td>
                    <td>{{ $guild->adventurer_bank }}</td>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
