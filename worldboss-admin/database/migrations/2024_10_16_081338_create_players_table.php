<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->string('player_id', 50)->primary();
            $table->string('guild_id', 50);
            $table->string('class', 50);
            $table->integer('level');
            $table->integer('life');
            $table->integer('action');
            $table->integer('experience');
            $table->bigInteger('golds');
            $table->integer('damages');
            $table->integer('donation');
            $table->timestamps(); // Optionnel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
