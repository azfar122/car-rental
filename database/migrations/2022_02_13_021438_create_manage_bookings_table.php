<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vehicle');
            $table->string('form_date');
            $table->string('to_date');
            $table->string('message');
            $table->string('status');
          
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
        Schema::dropIfExists('manage_bookings');
    }
}
