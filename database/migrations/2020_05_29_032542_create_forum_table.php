<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forum_title');
            $table->string('forum_type');
            $table->string('forum_img');
            $table->text('forum_content');
            $table->string('forum_username');
            $table->string('forum_top');
            $table->string('forum_count');
            $table->string('forum_date');
            $table->string('forum_ip');
            $table->string('re_total');
            $table->string('forum_last');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum');
    }
}
