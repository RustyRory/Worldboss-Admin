<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsTable extends Migration
{
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('id_discord')->unique(); // ID de la guilde Discord
            $table->string('id_owner'); // ID du propriétaire de la guilde
            $table->string('name'); // Nom de la guilde
            $table->string('channel_wb_id'); // ID du channel Discord
            $table->string('channel_city_id'); // ID du channel Discord
            $table->string('channel_graveyard_id'); // ID du channel Discord
            $table->integer('level'); // Niveau de la guilde
            $table->integer('damages'); // Dégâts
            $table->integer('max_damages'); // Dégâts max
            $table->integer('all_damages'); // Dégâts totaux
            $table->string('message_wb_id'); // ID du message Discord
            $table->string('message_city_id'); // ID du message Discord
            $table->string('message_warrior_id'); // ID du message Discord
            $table->string('message_mage_id'); // ID du message Discord
            $table->string('message_rogue_id'); // ID du message Discord
            $table->string('message_adventurer_id'); // ID du message Discord
            $table->integer('warrior_bank'); // Banque guerrier
            $table->integer('mage_bank'); // Banque mage
            $table->integer('rogue_bank'); // Banque voleur
            $table->integer('adventurer_bank'); // Banque aventurier
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('guilds');
    }
}
