<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('shipper_id')->unsigned();
            $table->string('code_employee')->default('');
            $table->string('key_token',15);
            $table->text('note');
            $table->tinyInteger('status')->default(0);
            $table->string('address');
            $table->timestamps();
            $table->foreign('customer_id')->references('customer_id')
            ->on('customers')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('shipper_id')->references('shipper_id')
            ->on('shippers')->onDelete('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
