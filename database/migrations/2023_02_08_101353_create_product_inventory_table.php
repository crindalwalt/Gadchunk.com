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
        Schema::create('product_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('retail_price');
            $table->string('store_price');
            $table->string('in_stock');
            $table->bigInteger('weight_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('product_type_id')->unsigned();
            $table->foreign('weight_id')->references('id')->on('weight')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_type_id')->references('id')->on('product_type')->onDelete('cascade');
            $table->integer('is_active');
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
        Schema::dropIfExists('product_inventory');
    }
};
