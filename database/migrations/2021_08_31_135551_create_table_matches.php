<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatches extends Migration
{
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('victory_player');
            $table->string('victory_type');
            $table->string('player_one_points');
            $table->string('player_two_points');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
}
