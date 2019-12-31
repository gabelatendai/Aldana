<?php

namespace App\Http\Controllers\Admin;
use App\Company;
use App\Department;
use App\Designation;
use App\Event;
use App\Leave;
use App\User;
use Carbon\Carbon;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use File;

use App\Admin;
use App\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show_dashboard()
    {

//        get the date births

//        $timestemp = "2016-4-5 05:06:01";


//        $to_date = Carbon::createFromDate('Y-m-d H:s:i', '2013-5-5 5:10:12');
//        $from_date = Carbon::createFromDate('Y-m-d H:s:i', '2014-6-6 7:20:14');
//        $diffInHours = $to_date->diffInHours($from_date, false);
//        $diffInMinutes = $to_date->diffInMinutes($from_date, false);
//        $diffInDays = $to_date->diffInDays($from_date, false);

//        $today_day = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->day;
//
//        $today_month = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->month;
//
//        $parse_user_birthday = Carbon::parse($user_birthday);
//
//        $formart_user_birth=$parse_user_birthday->format('Y-m-d H:i:s');
//
//
//        $real_birth_Date=Carbon::createFromFormat('Y-m-d H:i:s', $formart_user_birth)->day;
//        $real_birth_months=Carbon::createFromFormat('Y-m-d H:i:s', $formart_user_birth)->month;
//
//        if ($today_month=$real_birth_months){
//            echo 'We are having birth days this month';
//
//            if ($real_birth_Date=$today_day){
//                echo 'we are having birthday today';
//            }
//
//            if ($real_birth_Date>$today_day){
//
//                echo 'we are having birthday in'.($real_birth_Date-$today_day).'days';
//            }
//
//        }
//
//
////        var_dump($today_day);
////        var_dump($today_month);
////
////        var_dump($user_birthday);
////        var_dump($formart_user_birth);
////        var_dump($real_birth_Date);
////        var_dump($real_birth_months);
//
//
//
////        var_dump(round($difference_months));
////
////        var_dump(round($difference_days));


//ecnd get date births test




//        exit();

//        $date_now=Carbon::now();
        $employees=User::all();
        $employee_leaves=Leave::get();
        $leaves=Leave::where('leave_start_date' ,'<=',Carbon::now())->where('leave_end_date','>=',Carbon::now())->get();
        $user_birthday=User::get();
        $departments=Department::all();
        $designations=Designation::all();
        $events=Event::all();
        return view('admin.admin_dashbord',compact('employees','designations','leaves','departments','events','user_birthday','employee_leaves'));
    }
    public function show_admin()
    {
        $employees=User::all();
        $departments=Department::all();
        $designations=Designation::all();
        return view('admin.admin.index',compact('employees','designations','departments'));
    }




    public function company_seetings(){
        $companyinfo=Company::get()->first();
        return view('admin.settings.company_setup',compact('companyinfo'));
    }
    public function add_company(Request $request, $filename, $default = 'none')
    {
        $count=Company::get();
        if ($count->count()>0){
            return redirect()->back()->with('error','The Company information is already added Please Edit');
        }
        $this->validate($request,[
            'name'=>'required',
            'motto'=>'required',
            'town'=>'required',
            'city'=>'required',
            'code'=>'required',
            'phone'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'website'=>'required|url',
        ]);
        $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/logo/images';
            $file->move($path, $filename);
        } else {
            $filename = $default;
        }

        $company=new Company();
        $company->name=$request->name;
        $company->motto=$request->motto;
        $company->town=$request->town;
        $company->city=$request->city;
        $company->code=$request->code;
        $company->phone=$request->phone;
        $company->mobile=$request->mobile;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->photo = $filename;
        $company->save();
        if ($company->save()){
            return redirect()->back()->with('message','The Company information saved successfully');
        }
        return redirect()->back()->with('message','The Company information could not be saved');
    }



    //get the Company information form
    public function edit_company($id){
        $companyinfo=Company::findorfail($id);
        return view('admin.settings.edit',compact('companyinfo'));
    }


    //push the updated school information into the database
    public function update_company(Request $request,$id, $fileName, $default = 'none'){
//        $request->user()->authorizeRoles(['admin']);
        $this->validate($request,[
            'name'=>'required',
            'motto'=>'required',
            'town'=>'required',
            'city'=>'required',
            'code'=>'required',
            'phone'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'website'=>'required|url',
        ]);
        $company=Company::findorfail($id);
        $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/logo/images';
            $file->move($path, $filename);
            if(file_exists('upload/logo/images/'.$company->photo)){
                $path = 'upload/logo/images/'.$company->photo;
                unlink($path);
            }
        }
        elseif (!$request->hasFile('photo')) {
            if(file_exists('upload/logo/images/'.$company->photo)){
                $filename = $company->photo;
            }
            else {
                $filename=$default;
            }
        }
        $company->name=$request->name;
        $company->motto=$request->motto;
        $company->town=$request->town;
        $company->city=$request->city;
        $company->code=$request->code;
        $company->phone=$request->phone;
        $company->mobile=$request->mobile;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->photo = $filename;
        $company->save();
        if ($company->save()){
            return redirect()->back()->with('message','The Company information Updated successfully');
        }
        return redirect()->back()->with('message','The Company information Could not be updated');
    }
    //delete the selected school information
    public function delete_company($id)
    {
        $company=Company::findorfail($id);
        if ($company) {

            if(file_exists('upload/logo/images/'.$company->photo)){
                $path = 'upload/logo/images/'.$company->photo;
                unlink($path);
            }
            $company->delete();
            return redirect()->route('company_settings')->with('message','The Company information deleted successfully');

        }
        return redirect()->back()->with('error','The Company information could not be deleted');

    }






    //get staff add form
    public function staffform(Request $request)
    {
//        $request->user()->authorizeRoles(['admin']);
        $staffs=Admin::get();
        $roles=Role::get();
        return view('admin.staff.index',compact('roles','staffs'));
    }

    //insert staff
    public function addstaff(Request $request, $filename, $default = 'none')
    {
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'residence' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]);

        $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/staff/images';
            $file->move($path, $filename);
        } else {
            $filename = $default;
        }


        $stafff=new Admin();
        $stafff->admin_fname=$request->fname;
        $stafff->admin_lname=$request->lname;
        $stafff->username=$request->username;
        $stafff->admin_title=$request->title;
        $stafff->phone=$request->phone;
        $stafff->residence=$request->residence;
        $stafff->password=bcrypt($request->password);
        $stafff->email=$request->email;
        $stafff->admin_number=$request->number;
        $stafff->photo = $filename;
        $stafff->save();
        $stafff->roles()->attach($request->role);
        return redirect()->back()->with('message','The staff has been saved successfully');

    }



    // get the staff editing form
    public function editstaff(Request $request,$id)
    {
//        $request->user()->authorizeRoles(['admin']);
        $roles=Role::get();
        $staff=Admin::findOrfail($id);
        $staffs=Admin::get();
        if ($staff) {
            return view('admin.staff.edit',compact('roles','staff','staffs'));
        }
        return Redirect()->back()->with('error', 'The user could not be found,try again later');
    }


    //push the updated data into the database
    public function staffupdate(Request $request,$id, $filename, $default = 'none')
    {

        $stafff=Admin::findorfail($id);

//        $this->validate($request,[
//            'fname' => 'required',
//            'lname' => 'required',
//            'username' => 'required',
//            'title' => 'required',
//            'phone' => 'required',
//            'residence' => 'required',
//        ]);

        if ($request->password!="") {
            $this->validate($request,[
                'password' => 'required|string|confirmed',
            ]);
        }



        $file = $request->file('photo');


        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/staff/images';
            $file->move($path, $filename);
        }

        elseif (!$request->hasFile('photo')) {
            if(file_exists('upload/staff/images/'.$stafff->photo)){
                $filename = $stafff->photo;
            }
            else {
                $filename=$default;
            }
        }







        if ($stafff) {
            $password=$stafff->password;
            $stafff->admin_fname=$request->fname;
            $stafff->admin_lname=$request->lname;
            $stafff->username=$request->username;
            $stafff->admin_title=$request->title;
            $stafff->phone=$request->phone;
            $stafff->residence=$request->residence;

            if ($request->password !="") {
                $stafff->password=bcrypt($request->password);
            }else {
                $stafff->password=$password;
            }
            $stafff->email=$request->email;
            $stafff->admin_number=$request->number;
            $stafff->photo = $filename;
            $stafff->save();

            $stafff->roles()->sync($request->role);

            return redirect()->back()->with('message','The staff has been updated successfully');
        }


        return redirect()->back()->with('error','The staff could not be found');
    }
    //Delete staff member
    public function deletestaff(Request $request,$id){
        $deletestaff=Admin::findOrfail($id);
        if($deletestaff){
            $deletestaff->delete();

            if(file_exists('/upload/staff/images/'.$deletestaff->photo)){
                $path = '/upload/staff/images/'.$deletestaff->photo;
                unlink($path);
            }

            return view('admin.staff.index')->with('message', 'Staff Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'the Staff could not be found');
        }
    }







}
