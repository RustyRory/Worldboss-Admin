<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index($guildId)
    {
        // Récupérer les joueurs pour la guilde spécifiée
        $players = Player::where('guild_id', $guildId)->get();

        // Passer les joueurs à la vue
        return view('players.index', compact('players'));
    }
}
