<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_products', function (Blueprint $table) {
            $table->bigIncrements('feedback_product_id');
            $table->bigInteger('feedback_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('feedback_id')->references('feedback_id')->on('feedback');
            $table->foreign('product_id')->references('product_id')->on('products');
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
        Schema::dropIfExists('feedback_products');
    }
}
