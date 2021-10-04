<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->float('price')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->string('size');
            $table->string('color');
            $table->float('total_price');
            $table->timestamps();
            $table->foreign('order_id')->references('order_id')
            ->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('product_id')
            ->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
