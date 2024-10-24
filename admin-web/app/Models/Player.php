<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // Si tu as des colonnes spécifiques que tu veux remplir en masse, déclare-les ici
    protected $fillable = [
        'player_id',
        'guild_id',
        'class',
        'level',
        'life',
        'action',
        'experience',
        'golds',
        'max_damages',
        'donation',
        'max_donation',
        'kill_count',
    ];
}
