<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {

            $table->id();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('stay')->nullable();
            $table->string('staystart')->nullable();
            $table->string('stayend')->nullable();
            $table->string('level_certificate')->nullable();
            $table->tinyInteger('commercial')->default(0)->nullable();
            $table->tinyInteger('theatre')->default(0)->nullable();
            $table->tinyInteger('paris')->default(0)->nullable();
            $table->tinyInteger('provence')->default(0)->nullable();
            $table->tinyInteger('level')->default(0)->nullable();
            $table->string('certificate')->nullable();
            $table->string('uniqid')->default('none')->nullable();
            $table->tinyInteger('deposit')->default(0)->nullable();
            $table->string('lang')->nullable();
            $table->string('regdate')->nullable();
            $table->string('reghour')->nullable();
            $table->tinyInteger('confirmed')->default(0)->nullable();
            $table->tinyInteger('open')->default(0)->nullable();
            $table->tinyInteger('rappr')->default(0)->nullable();
            $table->tinyInteger('deleted')->default(0)->nullable();
            $table->tinyInteger('payment_full')->default(0)->nullable();
            $table->dateTime('payment_full_date')->nullable();
            $table->integer('sejour')->default(0)->nullable();
            $table->string('prospect_source')->nullable();


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
        Schema::dropIfExists('registrations');
    }
}
