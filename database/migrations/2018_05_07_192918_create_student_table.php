<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('studentId');
            $table->string('studentName', 255);
            $table->text('studentAddress')->nullable();
            $table->string('studentNumber', 75);
            $table->string('studentClass', 75)->nullable();
            $table->string('studentSection', 75)->nullable();
            $table->tinyInteger('services')->nullable()->comment('1 = one way, 2 = two way');
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
        Schema::dropIfExists('student');
    }
}
