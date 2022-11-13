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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
        });

        Schema::create('sub_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('fk_category_id');
            $table->foreign('fk_category_id')->references('id')->on('category')->onDelete('cascade');
            $table->string('description')->nullable();
        });

        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('source_path');
            $table->integer('order')->nullable();
            $table->morphs('multimediable');
        });


        Schema::create('sub_category_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('fk_sub_category_id');
            $table->foreign('fk_sub_category_id')->references('id')->on('sub_category')->onDelete('cascade');
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category_types');
        Schema::dropIfExists('sub_category');
        Schema::dropIfExists('category');
        Schema::dropIfExists('multimedia');
    }
};
