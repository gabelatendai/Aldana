<?php

namespace App\Http\Controllers\User;

use App\Country;
use App\Holiday;
use App\Leave;
use App\Message;
use App\Policycounter;
use Carbon\Carbon;
use App\Policy;
use App\Request as Rrequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('employees.employee_dashboard');
    }

    public function changepassword()
    {
        return view('employees/settings/account');
    }

    public function updatepassword(Request $request,$id)
    {
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
        ]);
        if (Auth::guard('web')->user()->employee_number===$request->employee_number)
        {
            $editpassword=User::find($id);
            if ($editpassword)
            {
                $editpassword->password=bcrypt($request->password);
                $editpassword->update();
                return  redirect()->back()->with('message','Your password has been updated');
            }else{
                return  redirect()->back()->with('error','Your password could not be updated now try again later');
            }
        }else{
            return  redirect()->back()->with('error','Access Denied');
        }

    }

    public function show_leaves(){
        $leave_requests=\App\Request::where('user_id',Auth::user()->id)->where('read_status','unread')->get();
        $leaves=Leave::where('user_id',Auth::user()->id)->get();
        $user=Auth::user()->id;
        $policies =Policy::get();
        return view('employees.leaves.leave',compact('user','policies','leave_requests','leaves'));
    }


//Leave Calculator

//controller Method
    public function leave_request(Request $request,$filename ,$default=null){
        $policy_duration=Policy::findOrFail($request->leave_policy);
        $policy_id=$policy_duration->id;
        $policy_days_duration=$policy_duration->duration;
        $employee_id=User::findOrfail(Auth::user()->id);

        $dates_duration=Carbon::parse($request->leave_end_date)->diffInDays(Carbon::parse($request->leave_start_date));


        $policy_counter=Policycounter::where('policy_id',$policy_id)->where('user_id',$employee_id->id)->first();


        if ($policy_counter){

            if ($policy_counter->counter>=$dates_duration){

                $file = $request->file('proof_document');
                if ($request->hasFile('proof_document')) {
                    $extension=$file->getclientOriginalExtension();
                    $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
                    $path = 'upload/employees/images/';
                    $file->move($path, $filename);
                } else {
                    $filename = $default;
                }

                $leave_request=new Rrequest();
                $leave_request->request_start_date=$request->leave_start_date;
                $leave_request->request_end_date=$request->leave_end_date;
                $leave_request->policy_id=$request->leave_policy;
                $leave_request->proof_document=$filename;
                $leave_request->leave_status='pending';
                $leave_request->read_status='Unread';
                $leave_request->user_id=$employee_id->id;
                $leave_request->description=$request->leave_description;
                if ($leave_request->save()){
                    return redirect()->back()->with('message','your request has been submitted ');
                }else{

                    return redirect()->back()->with('error','an error occurred during submission! Try again later');

                }

            }else{

                return redirect()->back()->with('error','you dont have enough days to request this leave!');
            }


        }elseif($dates_duration>$policy_days_duration){
            return redirect()->back()->with('error','Days requested exceeds the leaves maximum days! ');
        }

        else{

            $policy_counter=new Policycounter();
            $policy_counter->user_id=$employee_id->id;
            $policy_counter->policy_id=$policy_id;
            $policy_counter->counter=$policy_days_duration;
            $policy_counter->save();

            $file = $request->file('proof_document');
            if ($request->hasFile('proof_document')) {
                $extension=$file->getclientOriginalExtension();
                $filename = Str::slug($file->getClientOriginalName().".".date('d-m-Y').".".time()).".".$extension;
                $path = 'upload/employees/images/';
                $file->move($path, $filename);
            } else {
                $filename = $default;
            }

            $leave_request=new Rrequest();
            $leave_request->request_start_date=$request->leave_start_date;

            $leave_request->request_end_date=$request->leave_end_date;

            $leave_request->policy_id=$request->leave_policy;

            $leave_request->proof_document=$filename;
            $leave_request->leave_status='pending';
            $leave_request->read_status='Unread';
            $leave_request->user_id=Auth::user()->id;
            $leave_request->description=$request->leave_description;
            if ($leave_request->save()){
                return redirect()->back()->with('message','your request has been submitted ');
            }else{

                return redirect()->back()->with('error','an error occurred during submission! Try again later');

            }

        }










//        var_dump($policy_id);
//
//        var_dump($employee_id);
//
//        $start_new=$request->leave_start_date;








//
//      //  $leave_start_date=Carbon::parse($start_new);
//
//        $policy_days=(int)$policy_duration->duration;
//
//        $leave_end_date=Carbon::parse($request->leave_start_date)->addDays($policy_days);
//
//
//
////
//        echo('<p>Leave start</p>'.Carbon::parse($request->leave_start_date));
////
////
////        var_dump('<p>Leave start</p>'.$leave_start_date);
////
//      echo('<p>Policy Days</p>'.$policy_days);
//
//
//
//       echo('<p>Leave supposed to End </p>'.$leave_end_date);
//
//
//        $fridays = [];
//
//
//        $startDate = Carbon::parse($request->leave_start_date)->next(Carbon::FRIDAY); // Get the first friday.
//        $endDate = $leave_end_date;
//
//        for ($date = $startDate; $date->lte($endDate); $date->addWeek()) {
//            $fridays[] = $date->format('Y-m-d');
//        }
//
//
//        $friday_days=Count($fridays);
//
//        echo('<p>Fridays </p>'.Count($fridays));
//
//
////        $passport_expiry_date=User::where('passport_expiry_date','!=', null)->get();
//
//        $good_holidays=Holiday::where('start_date','>=',Carbon::parse($request->leave_start_date))->where('end_date','<=',$leave_end_date)->count();
//
//
//        $holidays=Holiday::count();
//
//        var_dump('<p>Holidays within leave </p>'.$holidays);
//
//        $days_used=1;
//
//        echo('<p>Days Used</p>' .'1');
//
//
//
//        $days_to_add=$friday_days + $good_holidays - $days_used;
//
//
//        echo ('<p>Days to Add</p>'.$days_to_add);
//
//
//        echo ('<p>Real leave end</p>'.$leave_end_date->addDays($days_to_add));
//
//        $real_leave_end=$leave_end_date->addDays($days_to_add);
//
//
//        $now=Carbon::now();
//
//
//        $format_leave_end_date=$real_leave_end->format('Y-m-d');
//
//
//
//        echo ('<p>Now</p>'.$now);
//
//        echo ('<p>End Date</p>'.$format_leave_end_date);
//
//
////        echo ('<p>Days Remaining</p>'.$now->diffInDays()->$format_leave_end_date);


        exit();



    }




    public  function get_unread_messages(){
        $unread_list='';
        $unread_notifications=Message::where('read_status','unread')->where('user_id',Auth::user()->id)->get();
        $total_count=$unread_notifications->count();

        foreach($unread_notifications as $row)
        {
            $unread_list .= '
            <a class="dropdown-item d-flex align-items-center mark_as_read_class '.$row->id.' " href="'.env('APP_URL').'/employee/update_message/'.$row->id.' " id=".'.$row->id.'.">
                    <div class="mr-3">
                        <div class="">'.$row->event_name.'</div>
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>

                        <p>'.$row->message.'</p>

                        <div class="small text-gray-500" >'.$row->message_from.'</div>
                        '.$row->start_date.'
                    </div>
                </a>
            ';
        }
        $data = array(
            'table_data'  => $unread_list,
            'total_data'  => $total_count,
        );


        echo json_encode($data);
    }



                public function manage_messages(){

                $messages=Message::where('user_id',Auth::user('web')->id)->get();

                return view('employees/announcements/index',compact('messages'));

        }




    public function delete_message($id){

        $message=Message::findOrFail($id);

        $messages=Message::where('user_id',Auth::user('web')->id)->get();

        if ($message){
            $message->delete();
        }


        return redirect('employee/manage_messages')->with('message','message Has been Deleted');
    }



    public function update_message($id){

        $message=Message::findOrFail($id);

        $message->read_status='read';

        if ($message){
            $message->save();
        }
        return redirect('employee/manage_messages');
    }



    public function show_details(){

        $employee=User::findOrFail(Auth::user()->id);
        return view('employees.settings.details',compact('employee'));

    }

















}
