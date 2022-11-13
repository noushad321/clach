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
            $table->string('short_description');
            $table->longText('long_description')->nullable();
            $table->integer('in_stock')->default(0);
            $table->string('reference_number')->nullable();
            $table->unsignedBigInteger('fk_sub_category_type_id');
            $table->foreign('fk_sub_category_type_id')->references('id')->on('sub_category_types')->onDelete('cascade');
            $table->float('price',7, 2)->default(0);
        });

        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');

        });

        Schema::create('attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_attribute_id');
            $table->foreign('fk_attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->string('value');

        });

        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_attribute_values_id');
            $table->foreign('fk_attribute_values_id')->references('id')->on('attribute_values')->onDelete('cascade');
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('id')->on('products')->onDelete('cascade');

        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');

        });

        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_tag_id');
            $table->foreign('fk_tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tags');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('product_attributes');
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('products');
    }
};
