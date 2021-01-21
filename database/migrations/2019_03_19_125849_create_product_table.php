<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
             $table->increments('pk_id');
            $table->integer('order')->default(0);
            $table->unsignedInteger('fk_category_id')->nullable();
            $table->unsignedInteger('fk_manufacture_id')->nullable();
            $table->unsignedInteger('fk_user_id')->nullable();
            $table->unsignedInteger('fk_vendor_id')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->float('offer')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
            $table->integer('featured')->default(0);
            $table->integer('bestseller')->default(0);
            $table->integer('saleoff')->default(0);
            $table->integer('hotdeal')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->foreign('fk_category_id')->references('pk_id')->on('category')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_manufacture_id')->references('pk_id')->on('manufacture')->onDelete('set null')->onUpdate('set null');
            $table->foreign('fk_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_vendor_id')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('product');
    }
}
