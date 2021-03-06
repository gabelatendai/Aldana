<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Leave extends Model
{
    protected $table='leaves';
    protected $fillable=['leave_start_date','leave_end_date','leave_status','leave_description','policy_id','user_id'];
    protected $primaryKey='id';
    public $timestamps=true;

    public function policy(){
        return $this->belongsTo('App\Policy');
    }
    public function employee(){
        return $this->belongsTo('App\User');
    }
}
