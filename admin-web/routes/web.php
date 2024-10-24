<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuildController;
use App\Http\Controllers\PlayerController; 


Route::get('/', function () {
    return view('welcome');
});


// Page de connexion simple
Route::get('/login', function () {
    return view('auth.login');
})->name('login.discord'); // Modifie le nom de la route pour correspondre à ce que tu utilises dans `welcome.blade.php`

// Redirection vers Discord
Route::get('auth/discord', function () {
    return Socialite::driver('discord')->redirect();
});

// Gestion du callback après authentification Discord
Route::get('auth/discord/callback', function () {
    $discordUser = Socialite::driver('discord')->user();

    // Cherche l'utilisateur par Discord ID ou email
    $user = User::where('discord_id', $discordUser->id)
                ->orWhere('email', $discordUser->email)
                ->first();

    // Si l'utilisateur n'existe pas, on le crée
    if (!$user) {
        $user = User::create([
            'name' => $discordUser->name,
            'email' => $discordUser->email,
            'discord_id' => $discordUser->id, // On associe l'ID Discord
            // On peut laisser le mot de passe vide ou le générer si nécessaire
            // 'password' => bcrypt('some-default-password'), // Facultatif, à condition que tu ne stockes pas de mot de passe pour les utilisateurs Discord
        ]);
    } else {
        // Si l'utilisateur existe déjà, assure-toi que l'ID Discord est bien enregistré
        $user->discord_id = $discordUser->id;
        $user->save();
    }

    // Connecter l'utilisateur
    Auth::login($user);

    return redirect('/dashboard'); // Redirection après connexion réussie
});

// Route pour le dashboard (accessible uniquement si authentifié)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route pour se déconnecter
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/guilds/{id}', [GuildController::class, 'show'])->name('guild.show');

Route::get('/guilds/{id}/players', [PlayerController::class, 'index'])->name('guild.players');


