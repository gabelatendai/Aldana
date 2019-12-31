<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table='countries';
    protected $fillable=['countrycode','countryname','code'];
    protected $primaryKey='id';
}
