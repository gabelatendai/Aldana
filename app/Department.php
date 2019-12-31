<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Department extends Model
{
    protected $table='departments';
    protected $fillable=[
        'department_name'
    ];
    protected $primaryKey='id';

    public function employees(){

        return $this->hasMany('App\User');

    }
}
