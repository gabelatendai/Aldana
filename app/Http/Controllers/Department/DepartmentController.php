<?php

namespace App\Http\Controllers\Department;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show_departments()
    {
        $departments=Department::all();
        return view('admin.departments.index',compact('departments'));
    }

    public function post_department( Request $request){
        $this->validate($request, [
            'department_name' => 'required|unique:departments',
        ]);

        if ($request->ajax())
        {
            return response(Department::create($request->all()));
        }

        else{

            $this->validate($request, [
                'department_name' => 'required|unique:departments',
            ]);
            $department=new Department();
            $department->department_name=$request->department_name;
            if ($department){
                $department->save();
                return redirect()->back()->with('message','department has been added successfully');
            }
            else{
                return redirect()->back()->with('error','department could not be added');
            }

        }
    }




    public  function department_edit($id){
        $departments=Department::paginate(8);
        $department=Department::findOrFail($id);
        return view('admin.departments.edit_department',compact('departments','department'));
    }

    public  function department_delete($id){
        $department=Department::findOrFail($id);
        if ($department){
            $department->delete();
            return redirect()->route('show_departments')->with('message','The department has been deleted successfully');
        }
        else{
            return redirect()->back()->with('error','The department could not be deleted try again later');
        }

    }

    public  function department_update(Request $request,$id){
        $this->validate($request, [
            'department_name' => 'required|unique:departments',
        ]);
        $department=Department::findOrFail($id);
        $department->department_name=$request->department_name;
        if ($department){
            $department->save();
            return redirect()->back()->with('message','department has been updated successfully');
        }
        else{
            return redirect()->back()->with('error','department could not be Updated');
        }
    }


}
