<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guild;


class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer toutes les guildes du user connecté
        $userId = auth()->user()->discord_id; // Récupérer l'ID Discord de l'utilisateur
        $guilds = Guild::where('id_owner', $userId)->get(); // Récupérer les guildes de cet utilisateur
  
        return view('dashboard', compact('guilds'));
    }
}
