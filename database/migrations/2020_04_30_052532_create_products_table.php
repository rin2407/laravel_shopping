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
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('product_name_slug');
            $table->integer('unit_price');
            $table->integer('promo_price');
            $table->string('producer');
            $table->integer('amount');
            $table->string('vote')->nullable();
            $table->integer('view_count')->default(0);
            $table->string('describe')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
