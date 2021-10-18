<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_variations', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->integer('stock_id');
            $table->integer('color_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->integer('weight_id')->nullable();
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
        Schema::dropIfExists('stock_variations');
    }
}
