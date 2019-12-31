<?php

namespace App\Http\Controllers\Leave;

use App\Holiday;
use App\Message;
use App\Policycounter;
use App\User;
use Carbon\Carbon;
use App\Leave;
use App\Vacation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Policy;
class LeaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function exceltest(){
    }





    public function show_leaves()
    {
        $employees= User::all();
        $leaves=Leave::get();
        $policies=Policy::get();
        $vacations=Vacation::get();

        return view('admin.leaves.index',compact('employees','policies','leaves','vacations'));
    }
    public function post_leave(Request $request)
    {


//        var_dump($request->all());
//
//
//        exit();

        $leave=new Leave();
        $leave->user_id=$request->user_id;
        $leave->policy_id=$request->leave_policy;
        $leave->leave_start_date=$request->leav_start_date;
        $leave->leave_end_date=$request->leav_end_date;
        $leave->leave_description=$request->leave_description;
        $leave->leave_name=$request->leave_name;
        $leave->leave_status='Active';
        $policy_id=$request->leave_policy;
        $user_id= $request->user_id;
        $policy_counter=Policycounter::where('user_id',$user_id)->where('policy_id',$policy_id)->first();
        $counter_to_update=Policycounter::findOrFail($policy_counter->id);
//        var_dump($counter_to_update->id);
//        exit();

        if ($counter_to_update){
            $counter_to_update->counter=$counter_to_update->counter-(Carbon::parse($request->leav_end_date)->diffInDays(Carbon::parse($request->leav_start_date)));
//            var_dump($counter_to_update->counter);exit();
            $counter_to_update->save();
            //echo $counter_to_update; exit();
        }
        if ($leave){
            $leave->save();
            $new_message=new Message();
            $new_message->read_status='unread';
            $new_message->message_from='Admin';
            $new_message->user_id=$request->user_id;;
            $new_message->message='Your Leave has been approved';
            $new_message->event_name='Leave approval';
            $new_message->save();
            return redirect()->back()->with('message', 'Your leave has been approved');
        }else{
            return redirect()->back()->with('error', 'the leave could not be approved  try again later ');
        }







//
//
//        $leave->leave_start_date=$request->leav_start_date;
//
//        $leave->leave_end_date=$leave_end_date->addDays($days_to_add);
//
//        $leave->leave_name=$request->leave_name;
//
//        $leave->number_of_holidays=$good_holidays;
//
//        $leave->number_of_fridays=$friday_days;
//
//        $leave->leave_description=$request->leave_description;
//





    }



    public function show_policy()
    {
        $polices= Policy::all();
        return view('admin.leaves.leave_policy',compact('polices'));
    }


    public function post_policy( Request $request){

        $this->validate($request, [
            'policy' => 'required',
            'duration'=>'required',
        ]);
        if ($request->ajax())
        {
            return response(Designation::create($request->all()));
        }

        else{
            $policy=new Policy();
            $policy->policy=$request->policy;
            $policy->duration=$request->duration;
            if ($policy){
                $policy->save();
                return redirect()->back()->with('message','Policy has been added successfully');
            }
            else{
                return redirect()->back()->with('error','policy could not be added try again later');
            }

        }


    }



    public  function edit_policy($id){
        $polices=Policy::paginate(8);
        $policy=Policy::findOrFail($id);
        return view('admin.leaves.edit_policy',compact('policy','polices'));
    }

    public  function delete_policy($id){
        $policy=Policy::findOrFail($id);

        if ($policy){
            $policy->delete();
            return redirect()->route('show_policy')->with('message','The policy has been deleted successfully');
        }
        else{
            return redirect()->back()->with('error','The policy could not be deleted try again later');
        }

    }





    public  function update_policy(Request $request,$id){

        $this->validate($request, [
            'policy' => 'required',
            'duration' => 'required',
        ]);
        $policy=Policy::findOrFail($id);
        $policy->policy=$request->policy;
        $policy->duration=$request->duration;
        if ($policy){
            $policy->save();
            return redirect()->back()->with('message','policy has been updated successfully');
        }
        else{
            return redirect()->back()->with('error','policy could not be Updated');
        }


    }

    public function show_requested_leaves(){

        $counters=Policycounter::get();
        $leave_requests=\App\Request::get();
        $policies =Policy::get();
        $employees=User::get();

        return view('admin.leaves.leave_request',compact('policies','leave_requests','employees','counters'));
    }
    public function leave_edit(){

        //
    }
    public function leave_delete($id){
        $employees= User::all();
        $leaves=Leave::get();
        $policies=Policy::get();
        $vacations=Vacation::get();
        $leave_to_delete=Leave::findOrFail($id);
        if ($leave_to_delete){
            $leave_to_delete->delete();
            return redirect()->route('show_leaves',compact('employees','leaves','policies','vacations'))->with('message','The leave has been deleted successfully');
        }
    }


    //holiday crud methods
    public function get_holiday(){
        $holidays=Holiday::get();
        return view('admin/leaves/holidays/holiday',compact('holidays'));
    }

    public function post_holiday(Request $request)
    {
        if ($request->ajax()){

            return response(Holiday::create($request->all()));
        }

        else{

            //

        }



//        $this->validate($request, [
//            'holiday_name' => 'required',
//            'start_date'=>'required',
//            'end_date'=>'required',
//        ]);
//        $new_holiday=new Holiday();
//        $new_holiday->background_color=$request->background_color;
//        $new_holiday->text_color=$request->text_color;
//        $new_holiday->border_color=$request->border_color;
//        $new_holiday->holiday_name=$request->holiday_name;
//        $new_holiday->start_date=$request->start_date;
//        $new_holiday->end_date=$request->end_date;
//        if ($new_holiday->save()){
//            return redirect()->back()->with('message','The Holiday has been saved successfully');
//        }else
//        {
//            return redirect()->back()->with('error','The Holiday could not be saved please try again later');
//        }




    }

    public function update_holiday($job)
    {
        echo 'update';
    }

    public function edit_holiday($job)
    {
        echo 'edit';
    }
    public function delete_holiday($id)
    {
       $holiday_to_dalete=Holiday::findOrfail($id);

       if ($holiday_to_dalete->delete()){
           return redirect()->route('get_holiday')->with('mesage','holiday deleted successfully');
       }else{
           return redirect()->back()->with('error',' the holiday could not be deleted please try again later');
       }


    }

}
