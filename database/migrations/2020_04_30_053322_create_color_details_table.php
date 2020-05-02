<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_details', function (Blueprint $table) {
            $table->bigIncrements('color_detail_id');
            $table->bigInteger('color_id')->unsigned();
            $table->bigInteger('product_color_id')->unsigned();
            $table->foreign('color_id')->references('color_id')->on('colors');
            $table->foreign('product_color_id')->references('product_id')->on('products');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_details');
    }
}
