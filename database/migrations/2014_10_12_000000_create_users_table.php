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
            $table->string('employee_number','50')->unique();
            $table->string('social_status','50')->nullable();
            $table->string('a_d_c','50')->nullable();
            $table->string('employee_status','255')->nullable();
            $table->string('first_name','255')->nullable();
            $table->string('last_name','255')->nullable();
            $table->string('mobile_number','255')->nullable();
            $table->string('date_of_birth','255')->nullable();
            $table->string('education_status','255')->nullable();
            $table->string('bank_account','255')->nullable();
            $table->string('internal_address','255')->nullable();
            $table->string('external_address','255')->nullable();

            $table->string('basic_salary','255')->nullable();
            $table->string('accommodation_allowance','255')->nullable();
            $table->string('experience_allowance','255')->nullable();
            $table->string('responsibility_allowance','255')->nullable();
            $table->string('other_allowance','255')->nullable();
            $table->string('transport_allowance','255')->nullable();
            $table->string('loan_amount','255')->nullable();
            $table->string('loan_installments','255')->nullable();
            $table->string('remaining_loan_balance','255')->nullable();
            $table->string('other_deductions','255')->nullable();
            $table->string('gratuity_advance','255')->nullable();
            $table->string('salary_advance','255')->nullable();

            $table->string('email')->unique();
            $table->string('designation','255')->nullable();
            $table->string('start_date','255')->nullable();
            $table->string('contract_period','255')->nullable();
            $table->string('internal_experience','255')->nullable();
            $table->string('external_experience','255')->nullable();
            $table->string('nationality','255')->nullable();
            $table->string('password','255')->nullable();
            $table->string('gender','255')->nullable();
            $table->string('profile_photo','500')->nullable();
            $table->string('passport_number','255')->nullable();
            $table->string('passport_issue_place','255')->nullable();
            $table->string('passport_issue_date','255')->nullable();
            $table->string('passport_expiry_date','255')->nullable();
            $table->string('passport_scan_file','500')->nullable();
            $table->string('passport_possession','255')->nullable();
            $table->string('visa_type','255')->nullable();
            $table->string('visa_number','255')->nullable();
            $table->string('visa_issue_place','255')->nullable();
            $table->string('visa_issue_date','255')->nullable();
            $table->string('visa_expiry_date','255')->nullable();
            $table->string('personal_code','255')->nullable();
            $table->string('labour_card_issue_place','255')->nullable();
            $table->string('labour_card_issue_date','255')->nullable();
            $table->string('labour_card_expiry_date','255')->nullable();
            $table->string('emirates_id_number','255')->nullable();
            $table->string('emirates_id_issue_place','255')->nullable();
            $table->string('emirates_id_issue_date','255')->nullable();
            $table->string('emirates_id_card_expiry_date','255')->nullable();
            $table->string('medical_card_number','255')->nullable();
            $table->string('medical_card_issue_place','255')->nullable();
            $table->string('medical_card_issue_date','255')->nullable();
            $table->string('medical_card_expiry_date','255')->nullable();
            $table->string('driving_licence_number','255')->nullable();
            $table->string('driving_licence_issue_place','255')->nullable();
            $table->string('driving_licence_issue_date','255')->nullable();
            $table->string('driving_licence_expiry_date','255')->nullable();
            $table->string('work_permit_number','255')->nullable();
            $table->string('work_permit_issue_place','255')->nullable();
            $table->string('work_permit_issue_date','255')->nullable();
            $table->string('work_permit_expiry_date','255')->nullable();
            $table->string('labour_card_number','255')->nullable();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('shift_id')->unsigned();
            $table->foreign('shift_id')->references('id')->on('shifts')->onUpdate('cascade')->onDelete('cascade');
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

