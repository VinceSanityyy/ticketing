<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->bigInteger('booking_id')->unsigned();
            $table->string('title');
            $table->string('fname');
            $table->string('lastname');
            $table->timestamps();
        });

        Schema::table('booking_details', function($table) {
            $table->foreign('booking_id')
                  ->references('booking_id')->on('bookings')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
}
