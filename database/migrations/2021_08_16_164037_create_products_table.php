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
            $table->integer('seller_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('product_desc')->nullable();
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id')->nullable();
            $table->integer('subsubcategory_id')->nullable();
            $table->integer('child_category_id')->nullable();
            $table->integer('grand_child_category_id')->nullable();
            $table->integer('price');
            $table->integer('percentage')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('discounted_price')->nullable();
            $table->string('sku')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('shop_id')->nullable();
            $table->string('product_img')->nullable();
            $table->string('product_img_2')->nullable();
            $table->string('product_img_3')->nullable();
            $table->integer('status')->default(1);
            $table->integer('approval')->default(0);
            $table->integer('is_veriation')->default(0);
            $table->integer('video_url')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
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
