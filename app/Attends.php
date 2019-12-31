<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Attends extends Model
{
    protected $table = 'attends';
    protected $fillable = ['user_id', 'checktime', 'checktype', 'verifycode', 'sensorid', 'workcode', 'sn', 'checkdate', 'checkintime', 'checkouttime','day_number'];

    public function attendance()
    {
        return $this->belongsTomany('App\User');
    }
    public function  att()
    {
        return $this->hasMany('App\User');
    }
}