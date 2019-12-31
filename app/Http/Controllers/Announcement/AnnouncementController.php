<?php

namespace App\Http\Controllers\Announcement;
use App\Message;
use App\Department;
use App\Policy;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Event;

use App\Request as Lrequest;

class AnnouncementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function show_announcements()
    {
        return view('admin.announcements.index');
    }
    public function post_event(Request $request){
        if($request->ajax()){
            $validator=Validator::make($request->all(),
                [
                    'event_name'=>'required',
                    'start_date'=>'required',
                ]);

            if($validator->fails()){
                $message = ['errors' => $validator->messages()->all()];
                $response = Response()->json($message, 202);
            }

            else{
                $event=new Event;
                $event->event_name=$request->event_name;
                $event->start_date=$request->start_date;
                $event->end_date=$request->start_date;
                $event->save();

                $message = ['success' => 'Event Created Successfully', 'url' => '/', 'name' => $request->event_name];
                $response = Response()->json($message, 200);
            }
        }
        return $response;
    }

    public function get_calendar_events(){}





    //get the unread notification


    public  function get_unread_notifications(){
        $unread_list='';
        $unread_notifications=Lrequest::where('read_status','unread')->get();
        $total_count=$unread_notifications->count();
        foreach($unread_notifications as $row)
        {

            $employee=User::where('id',$row->user_id)->pluck('first_name')->first();
            $employee_image=User::where('id',$row->user_id)->pluck('profile_photo')->first();

            $image_url='../upload/employees/images/'.$employee_image;


            $unread_list .= '
            <a class="dropdown-item d-flex align-items-center mark_as_read_class '.$row->id.' " href="'.env('APP_URL').'/admin/get_notifications/'.$row->id.' " id=".'.$row->id.'.">
                    <div class="mr-3">
                        <img class="rounded-circle" width="60" height="60" alt="" src="'.$image_url.'">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        
                        
                        <div class="small text-gray-500" >'.$row->created_at->diffForHumans().'</div>
                        '.$employee.'
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


    public function get_notifications(Request $request,$id){
        $leave_requests=Lrequest::get();
        $employees=User::get();
        $notification=Lrequest::findOrFail($id);
        $user=User::where('id',$notification->user_id)->first();
        $policies=Policy::get();
        $notification->read_status='read';
        $notification->save();
        return view('admin/leaves/edit_leave',compact('notification','leave_requests','policies','employees','user'));

    }


    public function get_notifications_reject(Request $request, $id){
        $leave_requests=Lrequest::get();
        $employees=User::get();
        $notification=Lrequest::findOrFail($id);
        $user=User::where('id',$notification->user_id)->first();
        $policies=Policy::get();
        $notification->read_status='read';
        $notification->save();
        return view('admin/leaves/edit_leave_reject',compact('notification','leave_requests','policies','employees','user'));
    }


    public function post_notifications_reject(Request $request,$id){
        $leave_requests=Lrequest::get();
        $request_to_reject=Lrequest::findOrFail($id);
        $employees=User::get();
        $notification=Lrequest::findOrFail($id);
        $user=User::where('id',$notification->user_id)->first();
        $policies=Policy::get();


        if ($request_to_reject){
            $request_to_reject->read_status='Rejected';
            $new_message=new Message();
            $new_message->read_status='Rejected';
            $new_message->message_from='Admin';
            $new_message->user_id=$request->user_id;
            $new_message->message=$request->reason_to_reject;
            $new_message->event_name='Leave Rejected';
            $new_message->save();
            return view('admin/leaves/leave_request',compact('notification','leave_requests','policies','employees','user'));
        }
        else{
            return redirect()->back()->with('error','the operation could not be completed! try again Later');
        }
//        var_dump('<p>you are rejecting</p>'.$request_to_reject);
//        var_dump('<p>Reason</p>'.$request->reason_to_reject);
    }



    public function delete_notification($id){
        $notification_to_delete=Lrequest::findOrFail($id);
        if ($notification_to_delete->delete()){
            $leave_requests=\App\Request::get();
            $policies =Policy::get();
            return view('admin.leaves.leave_request',compact('policies','leave_requests'));
        }else{
            return redirect()->back()->with('error','request could not be deleted try again later');
        }


    }
    public function send_messages(Request $request){
        $message_from=$request->sender;
        $departments=$request->department_array;
        $event_name=$request->event_name;
        $message=$request->message;
        $start_date=$request->start_date;

        if($request->selected_group=='selected_employee'){

            foreach ($departments as $receiver) {
            $new_message=new Message();
            $new_message->user_id=$receiver;
            $new_message->read_status='unread';
            $new_message->message_from=$message_from;
            $new_message->start_date=$start_date;
            $new_message->event_name=$event_name;
            $new_message->message=$message;
            $new_message->save();
            }

            $event=new Event;
            $event->event_name=$request->event_name;
            $event->start_date=$request->start_date;
            $event->end_date=$request->start_date;
            $event->save();


            $data=[

                'To'=>$receiver,
                'Subject'=>$event_name,
                'Message'=>$message,
                'Date'=>$start_date,
                'To'=>'selected_employee'
            ];

            echo json_encode($data);




        }
        if ($request->selected_group=='selected_departments'){
            foreach ($departments as $data) {

                $users=User::where('department_id',$data)->get();
                foreach ($users as $user){
                    $new_message=new Message();
                    $receiver=$user->id;
                    $new_message->user_id=$receiver;
                    $new_message->read_status='unread';
                    $new_message->message_from=$message_from;
                    $new_message->start_date=$start_date;
                    $new_message->event_name=$event_name;
                    $new_message->message=$message;
                    $new_message->save();

                }

            }
            $event=new Event;
            $event->event_name=$request->event_name;
            $event->start_date=$request->start_date;
            $event->end_date=$request->start_date;
            $event->save();
            $data=[

                'To'=>$receiver,
                'Subject'=>$event_name,
                'Message'=>$message,
                'Date'=>$start_date,
                'To'=>'selected_departments'
            ];

            echo json_encode($data);


        }

        if ($request->selected_group=='all_departments'){

            $users=User::get();
            foreach ($users as $user){
                $new_message=new Message();
                $receiver=$user->id;
                $new_message->read_status='unread';
                $new_message->message_from=$message_from;
                $new_message->user_id=$receiver;
                $new_message->start_date=$start_date;
                $new_message->event_name=$event_name;
                $new_message->message=$message;
                $new_message->save();
            }

            $event=new Event;
            $event->event_name=$request->event_name;
            $event->start_date=$request->start_date;
            $event->end_date=$request->start_date;
            $event->save();
                $data=[

                    'To'=>$receiver,
                    'Subject'=>$event_name,
                    'Message'=>$message,
                    'Date'=>$start_date,
                    'To'=>'EveryOne'
                ];

                echo json_encode($data);


        }




    }


    public function send_birthday(Request $request){
        $id =$request->id;
        $message=$request->message;
        $new_message=new Message();
        $new_message->read_status='unread';
        $new_message->message_from='Admin';
        $new_message->user_id=$request->id;
        $new_message->message=$message;
        $new_message->event_name='Happy Birthday';
        $new_message->save();


        $data=[
            'id'=>$id,
            'Message'=>$message,
        ];

        echo json_encode($data);


    }


}
