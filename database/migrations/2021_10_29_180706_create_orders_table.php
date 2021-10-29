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
            $table->string('location');
            $table->string('available_date');
            $table->string('available_schedule');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('area');
            $table->string('post_code');
            $table->string('address');
            $table->string('order_note');
            $table->tinyInteger('bed_rooms');
            $table->double('bed_rooms_total_price');
            $table->double('bed_room_unit_price');
            $table->tinyInteger('bath_rooms');
            $table->double('bath_rooms_total_price');
            $table->double('bath_room_unit_price');
            $table->double('sub_total');
            $table->double('vat_tax');
            $table->double('final_total');
            $table->string('payment_method');
            $table->string('extra_service')->nullable();
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
