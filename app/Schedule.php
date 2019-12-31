<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table='schedules';
    protected $fillable=[
        'schedule_name',
        'schedule_days'
    ];

    public function shifts(){

        return $this->hasMany('App\Shift');
    }

    public function employees(){

        return $this->belongsToMany('App\Employee');
    }
}
