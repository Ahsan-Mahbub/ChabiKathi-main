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
            $table->string('product_slug')->nullable();
            $table->longText('product_desc')->nullable();
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->integer('weight_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('quantity')->default(1);
            $table->string('sku')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('shop_id')->nullable();
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
