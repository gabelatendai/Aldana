<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable=['role_name','role_description'];
    protected $primaryKey='id';
    public $timestamps=true;

    public function admins()
    {
        return $this->belongsToMany('App\Admin');
    }

}
