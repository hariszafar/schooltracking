<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->increments('busId');
            $table->string('busNumber', 75);
            $table->string('regNumber', 255)->nullable();
            $table->integer('capacity')->nullable();
            $table->text('route')->nullable();
            $table->string('driverName', 255);
            $table->string('driverNumber', 75);
            $table->text('driverAddress')->nullable();
            $table->string('driverCnic', 75);
            $table->integer('createdBy')->nullable();
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
        Schema::dropIfExists('bus');
    }
}
