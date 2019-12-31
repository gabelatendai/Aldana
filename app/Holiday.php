<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $table='holidays';
    protected $fillable=['holiday_name','start_date','end_date','text_color','border_color','background_color'];
    public $timestamps=true;

}




