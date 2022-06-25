<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_comments', function (Blueprint $table) {
            $table->bigIncrements('id_game_comments');
            $table->string('user');
            $table->longText('content');
            $table->tinyInteger('rating');
            $table->bigInteger('id_game')->unsigned();
            $table->timestamps();
        });

        Schema::table('game_comments', function($table)
        {
            $table->foreign('id_game')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_comments');
    }
}
