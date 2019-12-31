<?php

namespace App\Http\Controllers\Designation;

use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show_designations()
    {
        $designations=Designation::all();
        return view('admin.designation.index',compact('designations'));
    }


    public function post_designation( Request $request){

        $this->validate($request, [
            'designation' => 'required|unique:designations',
        ]);
        if ($request->ajax())
        {
            return response(Designation::create($request->all()));
        }


        else{
            $designation=new Designation();
            $designation->designation=$request->designation;
            if ($designation){
                $designation->save();
                return redirect()->back()->with('message','designation has been added successfully');
            }
            else{
                return redirect()->back()->with('error','designation could not be added try again later');
            }

        }


    }



    public  function edit_designation($id){
        $designations=Designation::paginate(8);
        $designation=Designation::findOrFail($id);
        return view('admin.designation.edit_designation',compact('designation','designations'));
    }

    public  function delete_designation($id){
        $designation=Designation::findOrFail($id);
        if ($designation){
            $designation->delete();
            return redirect()->route('show_designations')->with('message','The designation has been deleted successfully');
        }
        else{
            return redirect()->back()->with('error','The designation could not be deleted try again later');
        }

    }

    public  function update_designation(Request $request,$id){

        $this->validate($request, [
            'designation' => 'required|unique:designations',        ]);
        $designation=Designation::findOrFail($id);
        $designation->designation=$request->designation;
        if ($designation){
            $designation->save();
            return redirect()->back()->with('message','designation has been updated successfully');
        }
        else{
            return redirect()->back()->with('error','designation could not be Updated');
        }


    }
}
