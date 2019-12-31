<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard='admin';
    protected $fillable = ['admin_fame','admin_lame','photo', 'password','usernamename', 'admin_title', 'admin_number','email'];
    protected $primaryKey='id';
    public $timestamps=true;


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    public function authorizeRoles($roles)
    {
        if (is_array($roles)){
            return $this->hasAnyRole($roles) || exit('You dont have permission to access this resource'.redirect()->back()->with('error','You are not allowed to do that'));
        }

        return $this->hasRole($roles) ||   exit('You dont have permission to access this resource'.redirect()->back());
    }

    public  function hasAnyRole($roles){
        return null !==$this->roles()->whereIn('rolename',$roles)->first();
    }

    public  function hasRole($roles){
        return null !==$this->roles()->where('rolename',$roles)->first();
    }







}
