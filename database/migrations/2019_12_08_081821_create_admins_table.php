<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_fname')->nullable();
            $table->string('admin_lname')->nullable();
            $table->string('username');
            $table->string('admin_title')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('residence')->nullable();
            $table->string('admin_number')->nullable();
            $table->string('password');
            $table->string('email')->unique();
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
        Schema::dropIfExists('admins');
    }
}
