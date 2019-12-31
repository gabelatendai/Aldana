<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table='trainings';
    protected $fillable=['training_start_date','training_subject','training_end_date','number_of_hours','institute_name','certification','certificate','user_id'];
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}
