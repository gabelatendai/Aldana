<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    protected $table='mesages';

    protected $fillable=['event_name','message','start_date','user_id'];




public function employee(){

    return $this->belongsTo(User::class);
}




}
