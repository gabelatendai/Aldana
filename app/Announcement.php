<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table='announcements';
    protected $fillable=['announcement_title','send_to', 'from', 'status', 'description','date'];
    protected $primaryKey='id';
    public $timestamps=true;

//    public function employees(){
//        return $this->belongsToMany('App\Employee');
//    }
}
