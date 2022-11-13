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
        Schema::create('walk_in_users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone_no');
            $table->string('apartment');
            $table->string('area');
            $table->string('country');
            $table->morphs('user');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->float('amount', 2);
            $table->string('status');
            $table->timestamps();
        });


        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->float('total', 7,2)->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('order');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('walk_in_users');
    }
};
