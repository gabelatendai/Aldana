<?php

namespace App\Http\Controllers\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function show_roles()
    {
        return view('admin.roles.index');
    }
}
