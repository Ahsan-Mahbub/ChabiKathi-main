<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->longText('product_desc')->nullable();
            $table->string('cat_id');
            $table->string('sub_cat_id')->nullable();
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->integer('quantity')->default(1);
            $table->string('sku')->nullable();
            $table->string('band')->nullable();
            $table->string('shop')->nullable();
            $table->string('product_img')->nullable();
            $table->string('product_img_2')->nullable();
            $table->string('product_img_3')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
