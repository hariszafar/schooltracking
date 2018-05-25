<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('userRole')->nullable()->default(null)->comment('1 = admin, 2 = users');
            $table->tinyInteger('isVerified')->nullable()->default(0)->comment('0 = email not verified, 1 = verified');
            $table->tinyInteger('approved')->nullable()->default(0)->comment('0 = not approved by admin, 1 = approved');
            $table->string('token', 255)->nullable()->default(null);
            $table->integer('createdBy')->nullable()->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
