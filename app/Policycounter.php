<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policycounter extends Model
{
    protected $table='policycounters';
    protected $fillable=['policy_id','user_id','counter'];

}
