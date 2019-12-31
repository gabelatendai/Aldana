<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }
    public function getloginFform(){

        return view('auth.Admin.adminlogin');

    }

//    public function username(){
//
//        return $this->adminpostlogin();
//    }
//
//    protected function sendFailedLoginResponse(Request $request)
//    {
//        throw ValidationException::withMessages([
//            $this->username() => [trans('auth.failed')],
//        ]);
//    }

    public function adminpostlogin(Request $request){
       $this->validate($request,[
           'username'=>'required',
           'password'=>'required'
       ]);
        $username=User::where('username',$request->username);
       if (!$username) {
            return redirect()->back()->with('error','The email  is not in the system')->withInput($request->only('username','remember'));
        }


        if (Auth::guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('show_dashboard'));
        }
        return redirect()->back()->with('error','incorrect username or password')->withInput($request->only('username','remember'));
}

    

protected function guard()
{
    return Auth::guard('admin');
}

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect('/');

//        return redirect()->back();
    }

}
