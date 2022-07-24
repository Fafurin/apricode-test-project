<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('genre_id');
            $table->primary(array('game_id', 'genre_id'));
            $table->timestamps();

            $table->index('game_id', 'game_genre_game_idx');
            $table->index('genre_id', 'game_genre_genre_idx');

            $table->foreign('game_id', 'game_genre_game_fk')->on('games')->references('id');
            $table->foreign('genre_id', 'game_genre_genre_fk')->on('genres')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_genres');
    }
};
