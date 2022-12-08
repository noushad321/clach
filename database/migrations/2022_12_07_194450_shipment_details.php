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
        Schema::create('shipment_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_first_name');
            $table->string('user_last_name')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('first_address');
            $table->string('second_address')->nullable();
            $table->string('country_code');
            $table->string('city_code');
            $table->string('area');
            $table->string('phone_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment_details');
    }
};
