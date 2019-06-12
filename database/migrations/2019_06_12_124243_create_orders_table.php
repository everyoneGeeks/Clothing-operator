<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->Increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('size_of_Waist');
            $table->integer('size_of_Chest');
            $table->integer('size_of_Thigh');
            $table->integer('size_of_Neck');
            $table->integer('size_of_Back');
            $table->integer('size_of_Shoulder');
            $table->integer('client_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->String('Signature');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('color_id')->references('id')->on('colors');

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
