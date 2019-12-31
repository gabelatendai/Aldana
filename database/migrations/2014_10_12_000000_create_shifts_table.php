<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shift_name')->nullable();
            $table->string('first_half_start_time')->nullable();
            $table->string('first_half_end_time')->nullable();
            $table->string('second_half_start_time')->nullable();
            $table->string('second_half_end_time')->nullable();
            $table->string('break_start_time')->nullable();
            $table->string('break_end_time')->nullable();
            $table->string('shift_color')->nullable();


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
        Schema::dropIfExists('shifts');
    }
}
