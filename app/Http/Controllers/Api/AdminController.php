<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }




    public function fetch_employees(){
        header('Access-Control-Allow-Origin: *');
        $employees=User::all();



        return json_encode($employees);

    }
}
