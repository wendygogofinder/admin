<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumReTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_re', function (Blueprint $table) {
            $table->increments('id');
            $table->string('re_quote');
            $table->string('re_title');
            $table->string('re_img');
            $table->string('re_content');
            $table->string('re_username');
            $table->string('re_date');
            $table->string('re_ip');
            $table->string('forum_id');
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
        Schema::dropIfExists('forum_re');
    }
}
