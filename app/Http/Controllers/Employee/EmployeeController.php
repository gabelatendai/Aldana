<?php

namespace App\Http\Controllers\Employee;
use App\Allowance;
use App\Contract;
use App\Country;
use App\Department;
use App\Document;
use App\Emergencycontact;
use App\Event;
use App\Message;
use App\Previousjob;
use App\Setup;
use App\Shift;
use App\Training;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Validator;
use PDF;
use File;

use App\Request as Lrequest;

use App\Designation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //employees salaries

//

    public function employee_salary(){

        $employees=User::get();
        $departments=Department::get();
        $allowances=Allowance::get();


        return view('admin/employees/salaries/employee_salary',compact('employees','allowances','departments'));

    }

//    employees salary calculations methods
//    ===========================================================================================/

    public function employee_salary_calculator_department(Request $request){
        $date=$request->salary_period;
        $departments=Department::get();
        $department=Department::findOrfail($request->employee_salary_department);
        return view('admin/employees/salaries/compute_salary_department',compact('department','departments','date'));
    }


    public function employee_salary_calculator_all(Request $request){
        $employees=User::get();
        $date=$request->salary_period_all;
        return view('admin/employees/salaries/compute_salary_all',compact('employees','date'));
    }


    public function employee_salary_calculator(Request $request){
        $employees=User::get();
        $departments=Department::get();
        $employee=User::findOrFail($request->employee_salary);
        if ($employee){
            return view('admin/employees/salaries/compute_salary',compact('employee','employees','departments'));
        }
    }


public function print_salary(Request $request, $id) {

    $user=User::findOrFail($id);

    $employees=User::get();


    $pdf = PDF::loadView('admin.employees.salaries.print_single_salary', compact('user','employees'));

    $pdf->setPaper('A4', 'landscape');

    return $pdf->stream('salary_form.pdf');
}

//    ===========================================================================================/


    public function show_employees()
    {
        $allowances=Allowance::get();
        $departments=Department::get();
        $employees= User::paginate(7);
        return view('admin.employees.index',compact('employees','departments','allowances'));
    }


    public function add_employees()
    {
        $allowances=Allowance::get();
        $countries=Country::get();
        $employees= User::paginate(7);
        $designations=Designation::all();
        $shifts=Shift::all();
        $departments=Department::all();
        return view('admin.employees.add_employees',compact('designations','shifts','departments','employees','countries','allowances'));
    }




public function expiring_soon(){

        $employee=User::get();

$passport_expiry_date=User::where('passport_expiry_date','!=', null)->get();


//$passport_expiry_date = Carbon::parse($passport_expiry_date->passport_expiry_date);
//
//$passport_days_remaining=Carbon::now()->diffInDays($passport_expiry_date);
//
//var_dump($passport_days_remaining);
//
//exit();


$labour_card_expiry_date=User::where('labour_card_expiry_date','!=', null)->get();
//$labour_card_expiry_date = Carbon::parse($labour_card_expiry_date->labour_card_expiry_date);
//$labour_card_days_remaining=Carbon::now()->diffInDays($labour_card_expiry_date);

$emirates_id_card_expiry_date=User::where('emirates_id_card_expiry_date','!=', null)->get();
//$emirates_id_card_expiry_date = Carbon::parse($emirates_id_card_expiry_date->emirates_id_card_expiry_date);
//$emirates_id_days_remaining=Carbon::now()->diffInDays($emirates_id_card_expiry_date);

$medical_card_expiry_date=User::where('medical_card_expiry_date','!=', null)->get();
//$medical_card_expiry_date = Carbon::parse($medical_card_expiry_date->medical_card_expiry_date);
//$medical_card_days_remaining=Carbon::now()->diffInDays($medical_card_expiry_date);

$driving_licence_expiry_date=User::where('driving_licence_expiry_date','!=', null)->get();
//$driving_licence_expiry_date = Carbon::parse($driving_licence_expiry_date->driving_licence_expiry_date);
//$driving_licence_days_remaining=Carbon::now()->diffInDays($driving_licence_expiry_date);

$work_permit_expiry_date=User::where('work_permit_expiry_date','!=', null)->get();
//$work_permit_expiry_date = Carbon::parse($work_permit_expiry_date->work_permit_expiry_date);
////$work_permit_days_remaining=Carbon::now()->diffInDays($work_permit_expiry_date);
///
$document_setup=Setup::get()->first();

return view('admin.employees.days_remaining',compact('employee','passport_expiry_date','document_setup','labour_card_expiry_date','emirates_id_card_expiry_date','medical_card_expiry_date','driving_licence_expiry_date','work_permit_expiry_date'));
    }



    public function get_documents_expiry_dates(Request $request)
    {

        if ($request->ajax()) {
            $output = '';
            $query = $request->get('column');

            $data = User::where($query, '!=', null)->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
                        <tr>
                         <td>'.$row->first_name.'</td>
                         <td>'.$row->employee_number.'</td>
                         <td>'.$row->email.'</td>
                         <td>'.$row->department->department_name.'</td>
                         <td>'.$row->$query.'</td>
                        </tr>
                        ';
                }
            }else
            {
                $output = '
                   <tr>
                    <td align="center" colspan="5">No Data Found</td>
                   </tr>
                   ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);

        }
    }







    public function post_employees(Request $request, $filename, $passport='', $default = 'none'){

        $this->validate($request, [
            'employee_number' => 'required|unique:users',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'mobile_number'=> 'required',
            'date_of_birth'=> 'required',
            'email'=> 'required|unique:users',
            'designation'=> 'required',
            'nationality'=> 'required',
            'gender'=>'required',
            'start_date'=>'required|date'
        ]);
        $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/images';
            $file->move($path, $filename);
        } else {
            $filename = $default;
        }


        $passport_scan_file= $request->file('passport_scan_file');
        if ($request->hasFile('passport_scan_file')) {
            $extension=$passport_scan_file->getclientOriginalExtension();
            $passport = Str::slug($passport_scan_file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/documents';
            $passport_scan_file->move($path, $passport);
        } else {
            $passport = $default;
        }

        $employee=new User();
        $employee->employee_number=$request->employee_number;
        $employee->first_name=$request->first_name;

        $employee->username=$request->first_name;


        $employee->last_name=$request->last_name;
        $employee->mobile_number=$request->mobile_number;
        $employee->date_of_birth=$request->date_of_birth;
        $employee->education_status=$request->education_status;
        $employee->bank_account=$request->bank_account;
        $employee->internal_address=$request->internal_address;
        $employee->external_address=$request->external_address;
        $employee->email=$request->email;
        $employee->social_status=$request->social_status;
        $employee->designation=$request->designation;
        $employee->start_date=$request->start_date;
        $employee->contract_period=$request->contract_period;
        $employee->internal_experience=$request->internal_experience;
        $employee->external_experience=$request->external_experience;
        $employee->nationality=$request->nationality;
        $employee->profile_photo=$filename;
        $employee->passport_scan_file=$passport;
        $employee->passport_possession=$request->passport_possession;


        $employee->basic_salary=$request->basic_salary;
        $employee->accommodation_allowance=$request->accommodation_allowance;
        $employee->experience_allowance=$request->experience_allowance;
        $employee->responsibility_allowance=$request->responsibility_allowance;
        $employee->other_allowance=$request->other_allowance;
        $employee->transport_allowance=$request->transport_allowance;
        $employee->loan_amount=$request->loan_amount;
        $employee->loan_installments=$request->loan_installments;
        $employee->remaining_loan_balance=$request->remaining_loan_balance;
        $employee->other_deductions=$request->other_deductions;
        $employee->gratuity_advance=$request->gratuity_advance;
        $employee->salary_advance=$request->salary_advance;


        $employee->department_id=$request->department;
        $employee->a_d_c=$request->a_d_c;
        $employee->password=bcrypt($request->employee_number);
        $employee->passport_number=$request->passport_number;
        $employee->passport_issue_place=$request->passport_issue_place;
        $employee->passport_issue_date=$request->passport_issue_date;
        $employee->passport_expiry_date=$request->passport_expiry_date;
        $employee->visa_type=$request->visa_type;
        $employee->visa_number=$request->visa_number;
        $employee->visa_issue_place=$request->visa_issue_place;
        $employee->visa_issue_date=$request->visa_issue_date;
        $employee->visa_expiry_date=$request->visa_expiry_date;
        $employee->labour_card_number=$request->labour_card_number;
        $employee->labour_card_issue_place=$request->labour_card_issue_place;
        $employee->labour_card_issue_date=$request->labour_card_issue_date;
        $employee->labour_card_expiry_date=$request->labour_card_expiry_date;
        $employee->emirates_id_number=$request->emirates_id_number;
        $employee->emirates_id_issue_place=$request->emirates_id_issue_place;
        $employee->emirates_id_issue_date=$request->emirates_id_issue_date;
        $employee->emirates_id_card_expiry_date=$request->emirates_id_card_expiry_date;
        $employee->medical_card_number=$request->medical_card_number;
        $employee->labour_card_issue_place=$request->labour_card_issue_place;
        $employee->medical_card_issue_place=$request->medical_card_issue_place;
        $employee->medical_card_issue_date=$request->medical_card_issue_date;
        $employee->medical_card_expiry_date=$request->medical_card_expiry_date;
        $employee->driving_licence_number=$request->driving_licence_number;
        $employee->driving_licence_issue_place=$request->driving_licence_issue_place;
        $employee->driving_licence_issue_date=$request->driving_licence_issue_date;
        $employee->driving_licence_expiry_date=$request->driving_licence_expiry_date;
        $employee->work_permit_number=$request->work_permit_number;
        $employee->work_permit_issue_place=$request->work_permit_issue_place;
        $employee->work_permit_issue_date=$request->work_permit_issue_date;
        $employee->work_permit_expiry_date=$request->work_permit_expiry_date;
        $employee->labour_card_number=$request->labour_card_number;
        $employee->personal_code=$request->personal_code;
        $employee->gender=$request->gender;
        $employee->salary=$request->salary;
//        $employee->passport_possession=$request->passport_possession;
        $employee->passport_scan_file=$passport;
        $employee->shift_id=$request->shift_id;
        $employee->employee_status=$request->employee_status ;
        if ($employee){
            $employee->save();
            $employee->allowances()->attach($request->allowance);
            $employee->designations()->attach($request->designation);
            session(['id' => $employee->id]);
//            return redirect()->back()->with('message','employee added to database');
            return redirect()->route( 'upload_employee_documents' )->with('message','employee added successfully');
        }

        else{
            return redirect()->back()->with('error','employee added to database');
        }
    }


    public function redirect_after_register(Request $request)
    {

//        var_dump($request->session()->get('id'));
//        var_dump($request->session()->all());

        $employees = User::paginate(20);
        $designations = Designation::all();
        $shifts = Shift::all();
        $departments = Department::all();
        if ($request->session()->get('id')) {
            $id = $request->session()->get('id');
            $employee = User::findOrFail($id);
            if ($employee) {
                return view('admin.employees.edit_employee', compact('employee', 'employees', 'designations', 'departments', 'shifts'));
            } else {

                return view('admin.employees.edit', compact('employee', 'employees', 'designations', 'departments', 'shifts'));
            }

            $request->session()->forget('id');

        }
    }

    public function employee_edit(Request $request, $id)
    {
        $employees = User::paginate(20);
        $designations = Designation::all();
        $shifts = Shift::all();
        $departments = Department::all();
        $employee = User::findOrFail($id);

        if ($employee) {
            return view('admin.employees.edit_employee', compact('employee', 'employees', 'designations', 'departments', 'shifts'));
        }
    }





    public function update_employees(Request $request,$id, $filename, $default = 'none'){


        $this->validate($request, [
//            'employee_number' => 'required',
//            'first_name'=> 'required',
//            'last_name'=> 'required',
//            'mobile_number'=> 'required',
//            'date_of_birth'=> 'required',
//            'email'=> 'required',
//            'designation'=> 'required',
//            'start_date'=> 'required',
//            'nationality'=> 'required',
//            'department_id'=> 'required',
//            'designation_id'=> 'required',
//            'gender'=>'required'
        ]);

        $employee=User::findOrFail($id);
        $file = $request->file('photo');

        if ($request->hasFile('photo')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/images';
            $file->move($path, $filename);
            if(file_exists('upload/employees/images/'.$employee->profile_photo)){
                $path = 'upload/employees/images/'.$employee->profile_photo;
                unlink($path);
            }
        }
        elseif (!$request->hasFile('photo')) {
            if(file_exists('upload/employees/images/'.$employee->profile_photo)){
                $filename = $employee->profile_photo;
            }
            else {
                $filename=$default;
            }
        }


        $file= $request->file('passport_scan_file');
        if ($request->hasFile('passport_scan_file')) {
            $extension=$file->getclientOriginalExtension();
            $passport = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/documents';
            $passport->move($path, $passport);
            if(file_exists('upload/employees/documents/'.$employee->passport_scan_file)){
                $path = 'upload/employees/documents/'.$employee->passport_scan_file;
                unlink($path);
            }
        }
        elseif (!$request->hasFile('passport_scan_file')) {
            if(file_exists('upload/employees/documents/'.$employee->passport_scan_file)){
                $filename = $employee->passport_scan_file;
            }
            else {
                $passport=$default;
            }
        }




        $passport_scan_file= $request->file('passport_scan_file');
        if ($request->hasFile('passport_scan_file')) {
            $extension=$passport_scan_file->getclientOriginalExtension();
            $passport = Str::slug($passport_scan_file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/documents';
            $passport_scan_file->move($path, $passport);

            if(file_exists('upload/employees/documents/'.$employee->passport_scan_file)){
                $path = 'upload/employees/documents/'.$employee->passport_scan_file;
                unlink($path);
            }


        }
        elseif (!$request->hasFile('passport_scan_file')) {
            if(file_exists('upload/employees/images/'.$employee->passport_scan_file)){
                $filename = $employee->passport_scan_file;
            }
            else {
                $passport=$default;
            }
        }
        $employee->employee_number=$request->employee_number;
        $employee->first_name=$request->first_name;


        $employee->username=$request->first_name;

        $employee->last_name=$request->last_name;
        $employee->mobile_number=$request->mobile_number;
        $employee->date_of_birth=$request->date_of_birth;
        $employee->education_status=$request->education_status;
        $employee->bank_account=$request->bank_account;
        $employee->internal_address=$request->internal_address;
        $employee->external_address=$request->external_address;
        $employee->email=$request->email;
        $employee->social_status=$request->social_status;
        $employee->a_d_c=$request->a_d_c;
        $employee->designation=$request->designation;
        $employee->start_date=$request->start_date;
        $employee->contract_period=$request->contract_period;
        $employee->internal_experience=$request->internal_experience;
        $employee->external_experience=$request->external_experience;
        $employee->nationality=$request->nationality;
        $employee->profile_photo=$filename;
        $employee->department_id=$request->department;
        $employee->password=bcrypt($request->employee_number);
        $employee->passport_number=$request->passport_number;
        $employee->passport_issue_place=$request->passport_issue_place;
        $employee->passport_issue_date=$request->passport_issue_date;
        $employee->passport_expiry_date=$request->passport_expiry_date;
        $employee->passport_scan_file=$passport;
        $employee->passport_possession=$request->passport_possession;


        $employee->basic_salary=$request->basic_salary;
        $employee->accommodation_allowance=$request->accommodation_allowance;
        $employee->experience_allowance=$request->experience_allowance;
        $employee->responsibility_allowance=$request->responsibility_allowance;
        $employee->other_allowance=$request->other_allowance;
        $employee->transport_allowance=$request->transport_allowance;
        $employee->loan_amount=$request->loan_amount;
        $employee->loan_installments=$request->loan_installments;
        $employee->remaining_loan_balance=$request->remaining_loan_balance;
        $employee->other_deductions=$request->other_deductions;
        $employee->gratuity_advance=$request->gratuity_advance;
        $employee->salary_advance=$request->salary_advance;


        $employee->visa_type=$request->visa_type;
        $employee->visa_number=$request->visa_number;
        $employee->visa_issue_place=$request->visa_issue_place;
        $employee->visa_issue_date=$request->visa_issue_date;
        $employee->visa_expiry_date=$request->visa_expiry_date;
        $employee->labour_card_number=$request->labour_card_number;
        $employee->labour_card_issue_place=$request->labour_card_issue_place;
        $employee->labour_card_issue_date=$request->labour_card_issue_date;
        $employee->labour_card_expiry_date=$request->labour_card_expiry_date;
        $employee->emirates_id_number=$request->emirates_id_number;
        $employee->emirates_id_issue_place=$request->emirates_id_issue_place;
        $employee->emirates_id_issue_date=$request->emirates_id_issue_date;
        $employee->emirates_id_card_expiry_date=$request->emirates_id_card_expiry_date;
        $employee->medical_card_number=$request->medical_card_number;
        $employee->labour_card_issue_place=$request->labour_card_issue_place;
        $employee->medical_card_issue_place=$request->medical_card_issue_place;
        $employee->medical_card_issue_date=$request->medical_card_issue_date;
        $employee->medical_card_expiry_date=$request->medical_card_expiry_date;
        $employee->driving_licence_number=$request->driving_licence_number;
        $employee->driving_licence_issue_place=$request->driving_licence_issue_place;
        $employee->driving_licence_issue_date=$request->driving_licence_issue_date;
        $employee->driving_licence_expiry_date=$request->driving_licence_expiry_date;
        $employee->work_permit_number=$request->work_permit_number;
        $employee->work_permit_issue_place=$request->work_permit_issue_place;
        $employee->work_permit_issue_date=$request->work_permit_issue_date;
        $employee->work_permit_expiry_date=$request->work_permit_expiry_date;
        $employee->labour_card_number=$request->labour_card_number;
        $employee->personal_code=$request->personal_code;
        $employee->gender=$request->gender;
        $employee->passport_scan_file=$passport;
        $employee->shift_id=$request->shift_id;

        $employee->employee_status=$request->employee_status ;
        if ($employee){
            $employee->save();
            $employee->designations()->attach($request->designation);
            $id=$employee->id;
            return redirect()->route('show_employees')->with('message','employee Updated  successfully');
        }
        else{
            return redirect()->back()->with('error','employee could not be updated try again later');
        }
    }


    public function  employee_delete($id){
        $employee=User::findorfail($id);
        if ($employee) {
            if(file_exists('upload/employees/images/'.$employee->profile_photo)){
                $path = 'upload/employees/images/'.$employee->profile_photo;
                unlink($path);
            }
            $employee->delete();
            return redirect()->route('show_employees')->with('message','The Employee'."$employee->first->name". 'Deleted');
        }
        return redirect()->back()->with('error','an error occurred please try again later');
    }



    public function upload_employee_documents(Request  $request ,$id=''){
//            var_dump(session()->get('id'));
        if (session()->get('id')){
            $id=session()->get('id');
            $employee=User::findOrFail($id);
            return view('admin.employees.edit',compact('employee'));
        }
        elseif(!session()->get('id')){
            $employee=User::findOrFail($id);
            return view('admin.employees.edit',compact('employee'));
        }
        else{
            return redirect()->back()->with('error','Sorry An error occurred please try again later');
        }
    }


    public function upload_employee_documents_link(Request $request,$id){
        $employee=User::findOrFail($id);

        if ($employee){
            return view('admin.employees.edit',compact('employee'));
        }
        else{
            return redirect()->back()->with('error','Sorry An error occurred please try again later');
        }

    }


    public function save_documents(Request $request, $filename, $default = 'none'){

        $file = $request->file('document_scan_file');
        if ($request->hasFile('document_scan_file')) {
            $extension=$file->getclientOriginalExtension();
            $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
            $path = 'upload/employees/documents';
            $file->move($path, $filename);
        } else {
            $filename = $default;
        }
        $employee_id=User::findOrFail($request->employee_id);
        $employee_document=new Document();
        $employee_document->document_type=$request->document_type;
        $employee_document->document_scan_file=$filename;
        $employee_document->user_id=$employee_id->id;
        if ($employee_document){
            $employee_document->save();
            return redirect()->back()->with('message','The Document has been saved successfully');
        }else{
            return redirect()->back()->with('error','Sorry An error occurred please try again later');
        }

    }




    function fetch_send_to(Request $request){

        if($request->ajax())
        {
            $output = '';
            $query = $request->get('id');

            if ($query==='all_departments'){


            }else if ($query==='selected_departments'){

                $data = Department::all();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        
                        <tr>
                        <td><input name="departments" value="'.$row->id.'" id="department_checkboxes" type="checkbox"></td>
                         <td>'.$row->department_name.'</td>
                         <td>'.$row->first_name.'</td>
                         <td>'.$row->mobile_number.'</td>
                        </tr>
                        ';
                    }
                }else
                {
                    $output = '
                   <tr>
                    <td align="center" colspan="5">No Data Found</td>
                   </tr>
                   ';
                }
                $data = array(
                    'table_data'  => $output,
                    'total_data'  => $total_row
                );
                echo json_encode($data);

            }else if ($query==='selected_employee'){
                $data = User::all();
                $total_row = $data->count();
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .= '
                        <tr>
                        <td><input type="checkbox" value="'.$row->id.'"></td>
                         <td>'.$row->employee_number.'</td>
                         <td>'.$row->first_name.'</td>
                         <td>'.$row->mobile_number.'</td>
                        </tr>
                        ';
                    }
                }else
                {
                    $output = '
                   <tr>
                    <td align="center" colspan="5">No Data Found</td>
                   </tr>
                   ';
                }
                $data = array(
                    'table_data'  => $output,
                    'total_data'  => $total_row
                );
                echo json_encode($data);
            }
        }

    }

    function search_employees(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = User::where('employee_number', 'like', '%'.$query.'%')
                    ->orWhere('first_name', 'like', '%'.$query.'%')
                    ->orWhere('mobile_number', 'like', '%'.$query.'%')->get();

            }
            else
            {
                $data = User::orderBy('id', 'desc')->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '

                        <tr >
                         <td><a href="'.$row->id.'">'.$row->employee_number.'</a></td>
                         <td><a href="'.$row->id.'">'.$row->first_name.'</a></td>
                         <td><a href="'.$row->id.'">'.$row->mobile_number.'</a></td>
                        </tr>
                        
                        ';
                }
            }
            else
            {
                $output = '
                   <tr>
                    <td align="center" colspan="5">No Data Found</td>
                   </tr>
                   ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }


    //    json data returning methods Employees
    public  function get_employees_json(){
        $result_list='';
        $employees=User::get();
        $total_count=$employees->count();
        foreach($employees as $row)
        {
            $result_list .= '
                        
                                        
                                        <tr class="tr">
                                        <a class="'.$row->id.' " href="'.env('APP_URL').'/admin/full_info/'.$row->id.' " id=".'.$row->id.'.">

                                        <td><a href="'.env('APP_URL').'/admin/full_info/'.$row->id.' " id=".'.$row->id.'.">'.$row->employee_number.'</a></td>

                                        <td><a href="'.env('APP_URL').'/admin/full_info/'.$row->id.' " id=".'.$row->id.'.">'.$row->first_name.'</a></td>
                                        <td><a href="'.env('APP_URL').'/admin/full_info/'.$row->id.' " id=".'.$row->id.'.">'.$row->mobile_number.'</a></td>
                                            </a>
                                        </tr>
                                        </a>
                                      
                        ';
        }

        $data = array(
            'table_data'  => $result_list,
            'total_data'  => $total_count,
        );
        echo json_encode($data);
    }



    //    json data returning methods
    public  function get_departments_json(){
        $result_list='';
        $departments=Department::get();
        $total_count=$departments->count();
        foreach($departments as $row)
        {

            $result_list .= '
                             
                             
                                        <tr>
                                        <a class="'.$row->id.' " href="'.env('APP_URL').'/admin//department_edit/'.$row->id.' " id=".'.$row->id.'.">

                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->id.'</a></td>

                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->department_name.'</a></td>
                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->employees->count().'</a></td>
                                            </a>
                                        </tr>
                                        </a>
                        ';
        }

        $data = array(
            'table_data'  => $result_list,
            'total_data'  => $total_count,
        );


        echo json_encode($data);
    }






    //    json data returning methods
    public  function get_announcements_json(){
        $result_list='';
        $announcements=Message::get();
        $total_count=$announcements->count();
        foreach($announcements as $row)
        {
            $result_list .= '
                        <tr class="tr">
                            <a class="'.$row->id.' " href="'.env('APP_URL').'/admin/show_announcements/" id=".'.$row->id.'.">

                            <td><a href="'.env('APP_URL').'/admin/show_announcements/" id=".'.$row->id.'.">'.$row->event_name.'</a></td>

                            <td><a href="'.env('APP_URL').'/admin/show_announcements/" id=".'.$row->id.'.">'.$row->message.'</a></td>
                            <td><a href="'.env('APP_URL').'/admin/show_announcements/" id=".'.$row->id.'.">'.$row->end_date.'</a></td>
                                </a>
                                </a>
                            </tr>
                            
                        ';
        }

        $data = array(
            'table_data'  => $result_list,
            'total_data'  => $total_count,
        );


        echo json_encode($data);
    }










        public function employee_document_upload_ajax(Request $request){




            $file = $request->file('photo');
            if ($request->hasFile('photo')) {
                $extension=$file->getclientOriginalExtension();
                $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
                $path = 'upload/employees/images';
                $file->move($path, $filename);
            }


            $data=[

                'id'=>$request->id,
                'file'=>$request->file('file'),
            ];

            echo json_encode($data);

        }










    public  function get_designations_json(){
        $result_list='';
        $designations=Designation::get();
        $total_count=$designations->count();
        foreach($designations as $row)
        {
            $result_list .= '
                        <tr>
                                        <a class="'.$row->id.' " href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">

                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->id.'</a></td>

                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->designation.'</a></td>
                                        <td><a href="'.env('APP_URL').'/admin/department_edit/'.$row->id.' " id=".'.$row->id.'.">'.$row->users->count().'</a></td>
                                            </a>
                                        </tr>
                                        </a>
                        ';
        }

        $data = array(
            'table_data'  => $result_list,
            'total_data'  => $total_count,
        );


        echo json_encode($data);
    }



    public function ajaxUpdate(Request $request)
    {
        $appointment = Events::findOrFail($request->appointment_id);

        $appointment->update($request->all());

        return response()->json(['appointment' => $appointment]);
    }


    public function full_info($id){
        $employee=User::findOrFail($id);
        return view('admin.employees.full_info',compact('employee'));
    }


// =========================EMPLOYEE INFORMATION MODELS=================================

//training models

    public function save_trainings(Request $request,$id){

        $employee=User::findOrfail($id);
        if ($employee){
            $user_id=$employee->id;
            $training=new Training();
            $training->training_start_date=$request->training_start_date;
            $training->training_subject=$request->training_subject;
            $training->training_end_date=$request->training_end_date;
            $training->number_of_hours=$request->hours_trained;
            $training->institute_name=$request->institution_name;
            $training->certification=$request->certification;
//            $training->certificate=$request->
            $training->user_id=$user_id;
            if ($training->save()){

                echo 'saved';

            }
        }
    }

//previous Job

    public function save_contract(Request $request,$id){
        $employee=User::findOrfail($id);
        if ($employee){
            $user_id=$employee->id;
            $contract=new Contract();
            $contract->contract_start_date=$request->contract_start_date;
            $contract->contract_end_date=$request->contract_end_date;
            $contract->contract_type=$request->contract_type;
            $contract->user_id=$user_id;
            if ($contract->save()){
                echo 'saved';
            }
        }
    }


    //Emergency Contact
    public function save_emergency(Request $request,$id){
        $employee=User::findOrfail($id);
        if ($employee){
            $user_id=$employee->id;
            $emergency_contact=new Emergencycontact();
            $emergency_contact->contact_person_name=$request->emergency_contact_person;
            $emergency_contact->contact_person_phone_number=$request->contact_person_number;
            $emergency_contact->contact_person_relationship=$request->contact_person_relationship;
            $emergency_contact->user_id=$user_id;
            if ($emergency_contact->save()){
                echo 'saved';
            }
        }
    }


    public function previous_job(Request $request,$id){
        $employee=User::findOrfail($id);
        if ($employee){
            $user_id=$employee->id;
            $previous_job=new Previousjob();
            $previous_job->company_name=$request->company_name;
            $previous_job->position_held=$request->position_held;
            $previous_job->date_left=$request->date_of_leaving;
            $previous_job->reason_for_leaving=$request->reason_for_leaving;
            $previous_job->user_id=$user_id;
            if ($previous_job->save()){
                echo 'saved';
            }
        }

}
















// =========================END OF EMPLOYEE INFORMATION MODELS=================================



}
