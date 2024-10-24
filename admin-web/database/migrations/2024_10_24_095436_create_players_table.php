<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->string('player_id')->primary(); // ID Discord du joueur
            $table->string('guild_id'); // ID Discord de la guilde
            $table->string('class'); // Classe du joueur
            $table->integer('level'); // Niveau du joueur
            $table->integer('life')->max(1000); // Vie max du joueur
            $table->integer('action'); // Action du joueur
            $table->integer('experience'); // Expérience du joueur
            $table->integer('golds'); // Or du joueur
            $table->integer('max_damages'); // Dégâts max du joueur
            $table->integer('donation'); // Don du joueur
            $table->integer('max_donation'); // Max don du joueur
            $table->integer('kill_count'); // Compteur de kills du joueur
            $table->timestamps(); // Champs created_at et updated_at

            // Ajouter une contrainte de clé étrangère si nécessaire
            $table->foreign('guild_id')->references('id_discord')->on('guilds')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
