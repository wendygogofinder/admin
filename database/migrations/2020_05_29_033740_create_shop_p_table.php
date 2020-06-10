<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_p', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_name');
            $table->string('p_price');
            $table->string('p_open');
            $table->string('p_pic');
            $table->string('p_date');
            $table->string('p_content');
            $table->string('shop_type');
            $table->string('date');
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
        Schema::dropIfExists('shop_p');
    }
}
