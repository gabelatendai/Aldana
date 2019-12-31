<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->time('checktime')->nullable();
            $table->date('checkdate')->nullable();
            $table->string('checktype')->nullable();
            $table->string('sensorid')->nullable();
            $table->integer('verifycode')->nullable();
            $table->integer('workcode')->nullable();
            $table->string('sn')->nullable();
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
        Schema::dropIfExists('attends');
    }
}
