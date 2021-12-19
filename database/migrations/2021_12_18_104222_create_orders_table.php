<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->dateTime('by_what_time');
            $table->text('comment');
            $table->string('street');
            $table->string('building');
            $table->string('flat');
            $table->string('payment_method');
            $table->string('card_number');
            $table->string('validity_period_card');
            $table->string('CVC_card');
            
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
