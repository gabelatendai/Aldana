<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passport');
            $table->string('residence_visa');
            $table->string('work_permit');
            $table->string('emirates_id');
            $table->string('medical_card');
            $table->string('driving_licence');
            $table->string('withdrawing_passport');
            $table->string('vehicles_ownership');
            $table->string('miscellaneous_documents');
            $table->string('trade_licence');
            $table->string('vehicle_insurance');
            $table->string('visit_visa');
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
        Schema::dropIfExists('setups');
    }
}
