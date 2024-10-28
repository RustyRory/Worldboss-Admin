<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    // Spécifiez le nom de la clé primaire
    protected $primaryKey = 'id_discord';

    // Si `id_discord` n'est pas un entier auto-incrémenté, précisez-le aussi
    public $incrementing = false;

    // Si `id_discord` est une chaîne, définissez le type de clé
    protected $keyType = 'string';

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
        'message_wb_id',
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
