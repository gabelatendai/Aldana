<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Designation extends Model
{
    protected $table='designations';
    protected $fillable=['id','designation'];
    public $timestamps=true;
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
