<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned();
            $table->tinyInteger('size_id');
            $table->tinyInteger('color_id');
            $table->integer('quantity')->unsigned();
            $table->timestamps();
            $table->foreign('product_id')->references('product_id')
            ->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('size_id')->references('size_id')
            ->on('sizes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color_id')->references('color_id')
            ->on('colors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
