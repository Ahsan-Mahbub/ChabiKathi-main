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
            $table->integer('size_id');
            $table->integer('color_id');
            $table->integer('weight_id');
            $table->integer('perches_price');
            $table->integer('sell_price');
            $table->string('barcode');
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
        Schema::dropIfExists('all_stock_products');
    }
}
