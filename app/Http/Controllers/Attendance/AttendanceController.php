<?php

namespace App\Http\Controllers\Attendance;
use App\Attends;
use App\Shift;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /*
   public function show_attendances()
  {
//        $user_names = Attends::distinct()->get(['name','','','','']);

    //  $attendances=Attends::orderBy('checkdate')->paginate(15);
      $attendances=Attends::where('user_id','=',8)->first()->paginate(15);
      $employees=User::get();
     //        $shift =Shift::where('id','=',$employees->shift_id)->first();

      return view('admin.attendance.index',compact('attendances'))
          ->with('employees', $employees);
         // ->with('shift', $shift);
  } */

       public function show_attendances()
       {
           $employees=User::get();
           $names=User::get();
           return view('admin.attendance.attendence')
               ->with('populate',Attends::where('user_id','=',$names)->get())
               ->with('employees', $employees)
               ->with('names',$names);
       }
   /*
       public function show_attendances()
       {


           $user=  DB::table('users')
       ->select('users.employee_number','users.first_name','users.last_name','attends.day_number')
           ->join('attends','attends.user_id','=','users.employee_number')->get();
               $employees=User::get();
               $names=User::get();
            $attendances=Attends::orderBy('checkdate');
           return view('admin.attendance.page1')
               ->with('attendances', $attendances)
               ->with('populate',Attends::where('user_id','=',$names)->get())
               ->with('employees', $employees)
               ->with('names',$names)
               ->with('new',$user);
       }

*/

    public function show_attendances_byDate(Request $request)
    {
//        $user_names = Attends::distinct()->get(['name','','','','']);
        $attendances=Attends::orderBy('checkdate')->where('checkdate',$request->checkdate)->paginate(15);
        return view('admin.attendance.index',compact('attendances'));
    }


//CONTINUE FROM HERE

    public function daily_report(Request $request){

        $attendances=Attends::where('date',$request->date)->paginate(15);

    }





    public function import()
    {
        $records = [];
        $path = 'upload/database/attendance';
        foreach (glob($path.'/*.csv') as $file) {
            $file = new \SplFileObject($file, 'r');
            $file->seek(PHP_INT_MAX);
            $records[] = $file->key();
        }
        $toImport = array_sum($records);

        return view('import', compact('toImport'));
    }




    public function upload_csv_data(Request $request){
        $number="";
            for($i=1;$i<=100;$i++){
              $number.=($i.",");
            }
            $number=substr($number,0,strlen($number)-1);
            $url = "http://192.168.0.20/form/Download?uid=".$number."&sdate=2019-12-22&edate=2019-12-25";
         
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
            $server_output = curl_exec ($ch);
         
            curl_close ($ch);
         //dd(curl_error($ch));
            $data = array();

            $record = explode("\n",$server_output);
            foreach($record as $r){
              $r = str_replace("\t"," ",$r);
              $isi = explode(" ",$r);
              array_push($data, $isi);
            }
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        //exit();

                foreach($data as $data1) {
                $user_id=@$data1[0];
                $checkdate=@$data1[2];
                $checktime=@$data1[3];
                $checktype=@$data1[5];



                $existing_data = Attends::where('checkdate',$checkdate)->where('user_id',$user_id)->first();


                //$existing_data=''; // added by jafer
//                    if ($checktype==0){
                        $attendance_data= new Attends();
                        $attendance_data->user_id=$user_id;
                        $attendance_data->checkdate=$checkdate;
                        $attendance_data->checktype=$checktype;
                        $attendance_data->checktime=$checktime;
                        $attendance_data->checkin=$checktype;
                        $attendance_data->checkintime=$checktime;
                        $attendance_data->checkouttime=NULL;
                        $attendance_data->day_number=Carbon::parse($checkdate)->day;
                        $attendance_data->save();
//                    }else{
//
//                        $data_to_update=[
//                            'user_id'=>$user_id,
//                            'checkdate'=>$checkdate,
//                            'checktime'=>$checktime,
//                            'checktype'=>$checktype,
//                        ];




//                        print_r($data_to_update['user_id']) ;
//                        echo '<p>';
//                        print_r($data_to_update['checkdate']) ;
//                        echo '<p>';
//                        print_r($data_to_update['checktime']) ;
//                        echo '<p>';
//                        print_r($data_to_update['checktype']) ;
//                        echo '<p>';





//                    $existing_data = Attends::where('checkdate',@$data_to_update[1])->where('user_id',@$data_to_update[0])->where('checkouttime',NULL)->first();
//                    print_r($existing_data);
//                    $existing_data = Attends::where('checkdate',$checkdate)->where('user_id',$user_id)->where('checktype',0);
//
//                        foreach ($existing_data as $data_to_update){
//
//                        }

//
                    }

//                    $existing_data = Attends::where('checkdate',['checkdate'])->where('user_id',['user_id'])->first();
//
//                    var_dump($existing_data);exit();


//        }
//                    foreach($data_to_update as $data1) {
//                        $existing_data = Attends::where('checkdate',$data1['checkdate'])->where('user_id',$data1['user_id'])->first();
//                        if ($existing_data!='' && $data1['checktype']==1) {
//                            $attendance_data = Attends::findOrfail($existing_data->id);
//                            $attendance_data->checkouttime = $data1['checktime'];
//                            $attendance_data->save();
//                        }else{
//                                $data_to_isert2[]=[
//                                    'user_id'=>$data1['user_id'],
//                                    'checkdate'=>$data1['checkdate'],
//                                    'checktime'=>$data1['checktime'],
//                                    'checktype'=>$data1['checktype'],
//                                ];
//                            }
//                    }

//                echo '<pre>';
////                print_r($data_to_update);
//                echo '</pre>';



//            if () {
//
//            echo 'done';
//
//                // return redirect->back()->with('message','data operation complete');
//            }




                // @$data1[4]@$data1[5]




}
}
