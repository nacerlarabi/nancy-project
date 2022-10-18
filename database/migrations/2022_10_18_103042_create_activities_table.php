<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('mnemonic')->nullable();
            $table->enum('type', ['program','outing','seminaire'])->nullable();
            $table->string('title_key')->nullable();
            $table->string('subtitle_key')->nullable();
            $table->string('description_key')->nullable();
            $table->json('dates')->nullable();
            $table->float('price')->nullable();
            $table->float('taxes')->nullable();
            $table->enum('lang',['fr','en','zh','ru'])->nullable();

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
        Schema::dropIfExists('activities');
    }
}
