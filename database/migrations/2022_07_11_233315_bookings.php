<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
	    $table->integer('status_id');
            $table->integer('user_id');
            $table->integer('address_id');
	    $table->integer('session_id');
            $table->integer('package_id');
            $table->integer('lang_level_id');
            $table->boolean('has_certification');
            $table->string('certification_path');
            $table->boolean('has_deposit');
            $table->float('deposit_amount');
            $table->boolean('is_opened');
            $table->integer('last_updated_by');
	    $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
