<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_details', function (Blueprint $table) {
            $table->bigIncrements('size_detail_id');
            $table->bigInteger('size_id')->unsigned();
            $table->bigInteger('product_size_id')->unsigned();
            $table->foreign('size_id')->references('size_id')->on('sizes');
            $table->foreign('product_size_id')->references('product_id')->on('products');
            $table->softDeletes();
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
        Schema::dropIfExists('size_details');
    }
}
