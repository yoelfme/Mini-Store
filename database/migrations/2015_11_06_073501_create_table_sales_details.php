<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSalesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('sale_id')->unsigned();
            $table->foreign('sale_id')->on('sales')->references('id');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->on('products')->references('id');

            $table->integer('quantity')->unsigned();
            $table->decimal('price', 15, 2);
            $table->decimal('total', 15, 2);

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
        Schema::drop('sales_details');
    }
}
