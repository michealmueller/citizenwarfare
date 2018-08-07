<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable(); // required the integer to not be negative
            $table->string('team_name')->unique();
            $table->string('team_website')->nullable();
            $table->integer('wins')->default(0);
            $table->integer('losses')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('team_members', function(Blueprint $table){
            $table->integer('id');
            $table->integer('team_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
        Schema::dropIfExists('team_members');
    }
}
