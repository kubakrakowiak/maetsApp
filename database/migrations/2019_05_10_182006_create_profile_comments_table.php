<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_comments', function (Blueprint $table) {
            $table->bigIncrements('id_profile_comments');
            $table->bigInteger('source_user_id');
            $table->longText('content');
            $table->bigInteger('destination_user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('profile_comments', function($table)
        {
            $table->foreign('destination_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_comments');
    }
}
