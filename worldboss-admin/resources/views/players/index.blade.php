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
                <th>Player ID</th>
                <th>Guild_id</th>
                <th>Class</th>
                <th>Level</th>
                <th>Life</th>
                <th>Action</th>
                <th>Experience</th>
                <th>Golds</th>
                <th>Damages</th>
                <th>Donation</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->player_id }}</td>
                    <td>{{ $player->guild_id }}</td>
                    <td>{{ $player->class }}</td>
                    <td>{{ $player->level }}</td>
                    <td>{{ $player->life }}</td>
                    <td>{{ $player->action }}</td>
                    <td>{{ $player->experience }}</td>
                    <td>{{ $player->golds }}</td>
                    <td>{{ $player->damages }}</td>
                    <td>{{ $player->donation }}</td>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
