<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('pk_id');
            $table->unsignedInteger('fk_vendor_id')->nullable();
            $table->unsignedInteger('fk_order_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('fk_order_id')->references('pk_id')->on('orders')->onDelete('set null')->onUpdate('set null');
            $table->foreign('fk_vendor_id')->references('id')->on('users')->onDelete('set null')->onUpdate('set null');


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
        Schema::dropIfExists('notification');
    }
}
