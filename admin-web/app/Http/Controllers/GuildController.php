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

    public function update(Request $request, $id)
    {
        // Valider les données entrantes
        $request->validate([
            'channel_wb_id' => 'nullable|string',
            'message_wb_id' => 'nullable|string',
            'channel_city_id' => 'nullable|string',
            'message_city_id' => 'nullable|string',
            'message_warrior_id' => 'nullable|string',
            'message_mage_id' => 'nullable|string',
            'message_rogue_id' => 'nullable|string',
            'message_adventurer_id' => 'nullable|string',
            'channel_graveyard_id' => 'nullable|string',
            // Ajoutez les autres champs ici
        ]);

        // Récupérer la guilde et mettre à jour les informations
        $guild = Guild::findOrFail($id);
        $guild->channel_wb_id = $request->input('channel_wb_id');
        $guild->message_wb_id = $request->input('message_wb_id');
        $guild->channel_city_id = $request->input('channel_city_id');
        $guild->message_city_id = $request->input('message_city_id');
        $guild->message_warrior_id = $request->input('message_warrior_id');
        $guild->message_mage_id = $request->input('message_mage_id');
        $guild->message_rogue_id = $request->input('message_rogue_id');
        $guild->message_adventurer_id = $request->input('message_adventurer_id');
        $guild->channel_graveyard_id = $request->input('channel_graveyard_id');
        // Assurez-vous de faire de même pour les autres champs

        $guild->save();

        // Rediriger avec un message de succès
        return redirect()->route('guild.show', $id)->with('success', 'Informations de la guilde mises à jour avec succès.');
    }
}
