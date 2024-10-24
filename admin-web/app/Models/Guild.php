<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    // Si tu as des colonnes spécifiques que tu veux remplir en masse, déclare-les ici
    protected $fillable = [
        'id_discord',
        'id_owner',
        'name',
        'channel_wb_id',
        'channel_city_id',
        'channel_graveyard_id',
        'level',
        'damages',
        'max_damages',
        'all_damages',
        'timeout',
        'cycle',
        'message_city_id',
        'message_warrior_id',
        'message_mage_id',
        'message_rogue_id',
        'message_adventurer_id',
        'warrior_bank',
        'mage_bank',
        'rogue_bank',
        'adventurer_bank',
    ];
}
