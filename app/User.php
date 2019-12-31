<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Request as Lrequest;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable=['employee_number','department_id',
        'first_name',
        'employee_status',
        'social_status',
        'last_name',
        'mobile_number',
        'date_of_birth',
        'education_status',
        'bank_account',
        'internal_address',
        'external_address',
        'email',
        'designation',
        'start_date',
        'contract_period',
        'internal_experience',
        'external_experience',
        'nationality',
        'profile_photo',
        'department_id',
        'gender',
        'password',
        'passport_number',
        'passport_issue_place',
        'passport_issue_date',
        'passport_expiry_date',
        'passport_scan_file',
        'passport_possession',
        'visa_type',
        'visa_number',
        'visa_issue_place',
        'visa_issue_date',
        'visa_expiry_date',
        'personal_code',
        'labour_card_issue_place',
        'labour_card_issue_date',
        'labour_card_expiry_date',
        'emirates_id_number',
        'emirates_id_issue_place',
        'emirates_id_issue_date',
        'emirates_id_card_expiry_date',
        'medical_card_number',
        'medical_card_issue_place',
        'medical_card_issue_date',
        'medical_card_expiry_date',
        'driving_licence_number',
        'driving_licence_issue_place',
        'driving_licence_issue_date',
        'driving_licence_expiry_date',
        'work_permit_number',
        'work_permit_issue_place',
        'work_permit_issue_date',
        'work_permit_expiry_date',
        'labour_card_number',
        'basic_salary','accommodation_allowance','experience_allowance','responsibility_allowance','other_allowance','transport_allowance','loan_amount','loan_installments','remaining_loan_balance','other_deductions','gratuity_advance','salary_advance',
    ];
    protected $primaryKey='id';
    public $timestamps=true;
    public function department(){
        return $this->belongsTo('App\Department');
    }
    public function designations(){
        return $this->belongsToMany('App\Designation');

    }
    public function documents(){

        return $this->hasMany('App\Document');

    }


    public function requests(){

        return $this->hasMany(Lrequest::class);

    }


    public function leaves(){
        return $this->hasMany('App\Leave');

    }


    public function messages(){

        return $this->hasMany(Message::class);

    }


    public function schedules(){
        return $this->belongsToMany('App\Schedule');

    }

    public function shift(){
        return $this->belongsTo('App\Shift');

    }

    public function announcements(){

        return $this->belongsToMany('App\Announcement');

    }

    public function allowances(){

        return $this->belongsToMany('App\Allowance');

    }

    public function deductions(){

        return $this->belongsToMany('App\Deduction');

    }

    public function vacations(){

        return $this->hasMany('App\Vacation');
    }


    public function polices(){

        return $this->belongsTomany("App\Policy")->with->Pivot('counter');
    }

  public function attendance(){
       return $this->hasMany("App\Attends");
  }


    public function trainings(){
        return $this->hasMany('App\Training');
    }


    public function contracts(){
        return $this->hasMany('App\Contract');
    }

    public function emergencycontacts(){
        return $this->hasMany('App\Emergencycontact');
    }

    public function previousjobs(){

        return $this->hasMany('App\Previousjob');
    }

    public function checkin(){
        return $this->hasMany("App\Attends");
    }
    public function  reg()
    {
        return $this->belongsTo('App\Register');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
