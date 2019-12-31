<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Policy extends Model
{
    protected $table='polices';
    protected $fillable=['policy','duration'];

    public $timestamps=true;

    public function leaves(){
        return $this->hasMany('App\leave');
}





    public function users(){

        return $this->belongsTomany("App\User")->with->Pivot('counter');
    }




}


