<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrandChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grand_child_categories', function (Blueprint $table) {
            $table->id();
            $table->string('grand_child_category_name')->unique();
            $table->string('slug')->nullable();
            $table->foreignId('child_category_id')->nullable();
            $table->foreign('child_category_id')->references('id')->on('child_categories')->onDelete('cascade');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('grand_child_categories');
    }
}
