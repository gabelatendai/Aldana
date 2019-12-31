<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencycontact extends Model
{
    protected $table='emergencycontacts';
    protected $fillable=['contact_person_name','contact_person_phone_number','contact_person_relationship','user_id'];
    public $timestamps=true;
    public function user(){
        return $this->belongsTo('App\User');
    }
}
