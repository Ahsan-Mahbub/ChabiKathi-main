<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_name')->nullable();
            $table->string('slider_link')->nullable();
            $table->string('slider_name_2')->nullable();
            $table->string('slider_link_2')->nullable();
            $table->string('slider_name_3')->nullable();
            $table->string('slider_link_3')->nullable();
            $table->string('slider_img')->nullable();
            $table->string('slider_img_2')->nullable();
            $table->string('slider_img_3')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
