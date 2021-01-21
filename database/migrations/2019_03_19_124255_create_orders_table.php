<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('pk_id');
            $table->string('billing_first_name');
            $table->string('billing_last_name');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_address_1');
            $table->string('billing_address_2');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->text('items_name');
            $table->text('quantity');
            $table->integer('user_id')->nullable();
            $table->integer('product_id');
            $table->integer('status')->default(1);
            $table->text('items_price');
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
        Schema::dropIfExists('orders');
    }
}
