<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name',150);
            $table->string('slug',150)->unique();
            $table->bigInteger('category_id')->unsigned();
            $table->text('description');
            $table->text('url_image');
            $table->integer('quantity_orderd')->unsigned()->default(0);
            $table->tinyInteger('gender'); //0 nam 1:nu 2:Kid
            $table->tinyInteger('status')->default(0); //0 :sale 1:off_sale
            $table->float('price');
            $table->float('discount');
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')
            ->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
