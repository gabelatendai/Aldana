<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{

    protected $table='allowances';
    protected $fillable=['name','amount'];
    public $timestamps=true;

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
