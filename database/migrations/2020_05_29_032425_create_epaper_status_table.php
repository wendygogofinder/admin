<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpaperStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epaper_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('epaper_id');
            $table->string('epaper_user_id');
            $table->string('epaper_starus');
            $table->string('epaper_date');
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
        Schema::dropIfExists('epaper_status');
    }
}
