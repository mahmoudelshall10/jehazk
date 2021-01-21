<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('pk_id');
            $table->unsignedInteger('fk_parent_id')->nullable();
            $table->string('name');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('popular')->default(0);
            $table->tinyInteger('star')->default(0);
            $table->foreign('fk_parent_id')->references('pk_id')->on('category')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('category');
    }
}
