<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table='contracts';
    protected $fillable=['contract_start_date','contract_end_date','contract_type','user_id'];
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
