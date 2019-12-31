<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['start_date','event_name','end_date'];
    public $timestamps = true;
}
