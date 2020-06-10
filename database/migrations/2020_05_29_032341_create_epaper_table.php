<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epaper', function (Blueprint $table) {
            $table->increments('id');
            $table->string('epaper_no');
            $table->string('epaper_title');
            $table->string('epaper_date');
            $table->string('epaper_content');
            $table->string('epaper_sh')->default('Y');
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
        Schema::dropIfExists('epaper');
    }
}
