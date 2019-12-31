<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    protected $table='deductions';
    protected $fillable=['name','ammount'];
    public $timestamps=true;

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
