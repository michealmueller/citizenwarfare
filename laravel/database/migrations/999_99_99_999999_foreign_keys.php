<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');
        });

        Schema::table('teams', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('comments', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('poster_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('team_members', function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('teams', function(Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('team_members', function(Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('team_id');
        });
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('team_id');
        });
        Schema::table('comments', function(Blueprint $table){
            $table->dropForeign('user_id');
            $table->dropForeign('poster_id');
        });

    }
}
