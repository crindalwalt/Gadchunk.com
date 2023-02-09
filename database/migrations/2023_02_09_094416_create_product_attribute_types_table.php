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
        Schema::create('product_attribute_types', function (Blueprint $table) {
            $table->bigInteger('product_type')->unsigned();
            $table->bigInteger('attribute_value')->unsigned();
            $table->foreign('product_type')->references('id')->on('product_types')->onDelete('cascade');
            $table->foreign('attribute_value')->references('id')->on('product_attribute_values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attribute_types');
    }
};
