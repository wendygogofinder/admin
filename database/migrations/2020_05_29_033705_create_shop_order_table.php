<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->string('order_name1');
            $table->string('order_name2');
            $table->string('order_phone');
            $table->string('order_addres');
            $table->string('order_paytype');
            $table->string('order_status')->default('n');
            $table->string('order_pay5');
            $table->string('order_date');
            $table->string('order_total')->default(0);
            $table->string('order_p');
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
        Schema::dropIfExists('shop_order');
    }
}
