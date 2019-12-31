<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Designation;
class Employee extends Model
{
   protected $table='employees';
   protected $fillable=['employee_number',
                       'first_name',
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
                        'passport_possession'
//                        'visa_type',
//                        'visa_number',
//                        'visa_issue_place',
//                        'visa_issue_date',
//                        'visa_expiry_date',
//                        'personal_code',
//                        'labour_card_issue_place',
//                        'labour_card_issue_date',
//                        'labour_card_expiry_date',
//                        'emirates_id_number',
//                        'emirates_id_issue_place',
//                        'emirates_id_issue_date',
//                        'emirates_id_card_expiry_date',
//                        'medical_card_number',
//                        'medical_card_issue_place',
//                        'medical_card_issue_date',
//                        'medical_card_expiry_date',
//                        'driving_licence_number',
//                        'driving_licence_issue_place',
//                        'driving_licence_issue_date',
//                        'driving_licence_expiry_date',
//                        'work_permit_number',
//                        'work_permit_issue_place',
//                        'work_permit_issue_date',
//                        'work_permit_expiry_date',
//                        'labour_card_number',
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


    public function schedules(){

        return $this->belongsToMany('App\Schedule');

    }


    public function shifts(){

        return $this->belongsToMany('App\Shift');

    }

    public function announcements(){

        return $this->belongsToMany('App\Announcement');

    }
}
