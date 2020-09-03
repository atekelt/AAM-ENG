<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            /*
            so i created this order item table here to contain each item in the order , order_id and will relate to the batch , and product_id will relate to each product  . 
            
            */
            $table->id();
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('quantity')->unsigned();  
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
        Schema::dropIfExists('order_items');
    }
}
