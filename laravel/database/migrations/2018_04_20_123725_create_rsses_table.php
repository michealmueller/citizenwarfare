<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rss_feed');
            $table->string('rss_title')->unique();
            $table->string('rss_feedImage');
            $table->string('rss_link');
            $table->dateTime('rss_pubDate');
            $table->longText('rss_content');
            $table->longText('rss_contentExerpt');
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
        Schema::dropIfExists('rsses');
    }
}
