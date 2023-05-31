<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('user_id');
            $table->string('checkout_email');
            $table->string('checkout_city');
            $table->string('checkout_country');
            $table->string('checkout_address');
            $table->string('checkout_postcode')->nullable();
            $table->string('checkout_phone');
            $table->text('checkout_note')->nullable();
            $table->string('total_amount');
            $table->string('order_number');
            $table->string('payment_method');
            $table->enum('status', ['pending', 'approved','dispatched', 'cancelled','delivered'])->default('pending');
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
};
