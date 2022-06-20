<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id')-> unsigned();
            $table->foreignId('user_id')->references('id')->on('users');   //FK1
            // $table->bigInteger('order_items_id')-> unsigned();
            // $table->foreignId('order_items_id')->references('id')->on('order_items'); //FK2
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
};


