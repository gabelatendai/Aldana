<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Shift extends Model
{
    protected $table='shifts';
    protected $fillable=['shift_name','first_half_start_time','first_half_end_time','second_half_start_time',
        'second_half_end_time','break_start_time','break_end_time','shift_color','schedule_id','shift_color','shift_start_time','shift_end_time'
        ];

    public $timestamps=true;
    protected $primaryKey='id';

    public function employee(){
        return $this->belongsTo('App\User');
    }


    public function schedule(){
        return $this->belongsTo('App\Schedule');
    }



    public function shift(){
        return $this->hasMany('App\User');
    }
}
