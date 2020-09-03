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
            /*
            so i changed some stuff , i removed the items column , which was json type and replaced it with a connecting table .there is also a new column status which can be pending complete or canceled , this is to be able to lable each order ...


            */
            $table->id();
            $table->string('user_name');
            $table->string('email');
            $table->string('phoneNumber');
            $table->enum('status',['pending','complete','canceled'])->default('pending');
            //$table->json('items');
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
        Schema::dropIfExists('orders');
    }
}
