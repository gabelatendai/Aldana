<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Previousjob extends Model
{
   protected $table='previousjobs';
   protected $fillable=['company_name','position_held','date_left','reason_for_leaving','user_id'];
   public $timestamps=true;


    public function user(){
        return $this->belongsTo('App\User');
    }

}




