<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->integer('perches_price');
            $table->integer('perches_code');
            $table->integer('sell_price');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->integer('color_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->integer('weight_id')->nullable();
            $table->string('status')->default(1);
            $table->integer('approval')->default(0);
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
        Schema::dropIfExists('stocks');
    }
}
