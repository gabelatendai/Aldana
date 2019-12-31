<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $table='vacations';
    protected $fillable=['vacation_name' ,'vacation_start_date', 'vacation_end_date', 'vacation_status', 'vacation_description', 'user_id', 'user_id','policy_id', 'policy_id'];


    public function employeey(){
        return $this->belongsTo('App\User');
    }

    public function policy(){
        return $this->belongsTo('App\Policy');
    }


}


