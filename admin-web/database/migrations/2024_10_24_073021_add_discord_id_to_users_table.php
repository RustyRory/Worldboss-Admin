<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('discord_id')->unique()->nullable(false)->change(); // Rendre le champ non nullable
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('discord_id');
    });
}

};
