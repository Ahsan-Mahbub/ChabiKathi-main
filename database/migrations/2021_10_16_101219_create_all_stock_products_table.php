<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStockProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_stock_products', function (Blueprint $table) {
            $table->id();
            $table->integer('stock_id');
            $table->foreignId('size_id');
            $table->foreignId('color_id');
            $table->foreignId('weight_id');
            $table->integer('perches_price');
            $table->integer('sell_price');
            $table->string('barcode');
            $table->timestamps();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('weight_id')->references('id')->on('weights')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_stock_products');
    }
}
