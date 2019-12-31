<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table='attendances';
    protected $fillable=['user_id','checktime','checktype','verifycode','sensorid','workcode','sn'];

//    public function employee(){
//        return $this->belongsTo("App\User");
//    }



}






