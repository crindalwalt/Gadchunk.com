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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string("brand_id");
            $table->string("category_id");
            $table->string("featured_image");
            // $table->integer('price');
            // $table->integer('discounted_price')->nullable();
            // $table->bigInteger('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->longText('description');
            $table->string('is_active')->default('yes');
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
        Schema::dropIfExists('products');
    }
};
