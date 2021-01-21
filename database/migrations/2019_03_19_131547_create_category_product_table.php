<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('pk_id');
            $table->unsignedInteger('fk_category_id')->nullable();
            $table->unsignedInteger('fk_product_id')->nullable();
            $table->foreign('fk_category_id')->references('pk_id')->on('category')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_product_id')->references('pk_id')->on('product')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('category_product');
    }
}
