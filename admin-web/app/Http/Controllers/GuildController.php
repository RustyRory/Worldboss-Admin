<?php

namespace App\Http\Controllers;

use App\Models\Guild;
use Illuminate\Http\Request;

class GuildController extends Controller
{
    public function show($id)
    {
        // Récupérer la guilde par son ID
        $guild = Guild::where('id_discord', $id)->firstOrFail();

        // Passer la guilde à la vue
        return view('guild.show', compact('guild'));
    }
}
