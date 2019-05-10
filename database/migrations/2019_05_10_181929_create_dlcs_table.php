<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDlcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlcs', function (Blueprint $table) {
            $table->bigIncrements('id_dlc');
            $table->string('name');
            $table->longText('desc_dlc');
            $table->bigInteger('id_game')->unsigned();

            $table->timestamps();
        });
        Schema::table('dlcs', function($table)
        {
            $table->foreign('id_game')->references('id_game')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dlcs');
    }
}
