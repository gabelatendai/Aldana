@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <div class="container-fluid text-center">
            <div class="card shadow mb-4 text-center"  style="border-radius: 0">
                <div class="card-header p-0 custom_card_header text-center text-white"  style="border-radius: 0">
                    Manage Attendances Reports
                </div>

                <ul class="nav tabs-orange text-center mx-auto" id="attendance_reports" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link btn-hover color-2 shadow-none active show " id="profile-tab-classic-orange" data-toggle="tab" href="#profile-classic-orange"
                           role="tab" aria-controls="profile-classic-orange" aria-selected="true">
                            {{--<i class="fas fa-user fa-2x pb-2"aria-hidden="true"></i>--}}
                            Daily Report</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-3" id="awesome-tab-classic-orange" data-toggle="tab" href="#date_range_reports"
                           role="tab" aria-controls="awesome-tab-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-envelope fa-2x pb-2" aria-hidden="true"></i>--}}
                            Date Range</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link shadow-none btn-hover color-9" id="awesome-tab-classic-orange" data-toggle="tab" href="#awesome-classic-orange"
                           role="tab" aria-controls="awesome-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-star fa-2x pb-2" aria-hidden="true"></i>--}}
                            Custom Report</a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-book-dead fa-2x pb-2" aria-hidden="true"></i>--}}
                            Shift wise </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link btn-hover color-1  shadow-none" id="follow-tab-classic-orange" data-toggle="tab" href="#follow-classic-orange"
                           role="tab" aria-controls="follow-classic-orange" aria-selected="false">
                            {{--<i class="fas fa-book-dead fa-2x pb-2" aria-hidden="true"></i>--}}
                            Absents</a>
                    </li>


                </ul>

                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade active show" id="profile-classic-orange" role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="show_attendance_byDate_form" action="{{route('show_attendances_byDate')}}" method="get" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <?php $today= \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="col-md-6 mx-auto ">
                                        <div class="form-group  text-center mx-auto">
                                            <label for="leave_start_date">Date</label>
                                            <input type="text" class="form-control input_size text-center py-0"  value="{{$today}}" required name="checkdate" placeholder="Date" id="leave_start_date">
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDate" class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2" style="width: 100px;height: 30px">Load</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="tab-content card border-0 " id="attendance_reports">
                    <div class="tab-pane fade show" id="profile-classic-orange " role="tabpanel" aria-labelledby="profile-tab-classic-orange">
                        <div class="container-fluid mt-2">
                            <form class="form-horizontal" id="profile-classic-orange" action="{{route('show_attendances_byDateRange')}}" method="get" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <?php $today= \Carbon\Carbon::now()->toDateString() ?>
                                <div class="card-body border-0 mx-2">
                                    <div class="row">

                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">Start Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"  value="{{$today}}" required name="checkdate_start" placeholder="Date" id="leave_start_date">
                                            </div>
                                        </div>


                                        <div class="col-md-6 mx-auto ">
                                            <div class="form-group  text-center mx-auto">
                                                <label for="leave_start_date">End Date</label>
                                                <input type="text" class="form-control input_size text-center py-0"  required name="checkdate_end" placeholder="Date" id="leave_start_date">
                                            </div>
                                        </div>


                                    </div>





                                </div>
                                <div class="card-footer my-auto bg-transparent p-0 border-0">
                                    <div class="container-fluid">
                                        <button type="submit" id="submit_show_attendance_byDateRange" class="btn shadow-none mb-3  btn-sm float-right text-white btn-hover color-5 mb-2" style="width: 100px;height: 30px">Load</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>










                <style>
                    .box22{
                        width:20px;
                        height:20px;
                    }
                </style>






                @if($employees)
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text_font font-weight-bolder">
                            <th>Employee Name</th>
                            <?php

                            $date=\Carbon\Carbon::now()->day;


                            //        print_r($date) ;


                            for($i=1;$i<29;$i++){?>
                            <th>{{$i}}</th>
                            <?php } ?>

                            <?php if(date('t')>28):?><th>29</th><?php endif;?>
                            <?php if(date('t')>29):?><th>30</th><?php endif;?>
                            <?php if(date('t')>30):?><th>31</th><?php endif;?>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($employees as $employee)
                            <?php
                            //$employee_name=$employee->id;
                            //dd($employees);


                            // $Attends = \App\Attends::where('user_id', $employee->id);
                            // dd($Attends);


                            //$Attends->checktime //This value is to be entered in the tooltip to replace 222
                            ?>

                            <tr class="text_font">
                                <td>{{$employee->first_name}}&nbsp;{{$employee->last_name}}</td>
                                <td> @if($i==$date)
                                        @if($employee->shift->shift_name=="red")
                                            <div class="box22 red" data-toggle="tooltip" data-placement="top" title="{{222}}"></div>
                                        @elseif($employee->shift->shift_name=="green")
                                            <div class="box22 green"> </div>
                                        @elseif($employee->shift->shift_name=="green")
                                            <div class="box22 blue"> </div>
                                        @endif
                                    @else
                                        <div class="box22 black"> </div>
                                    @endif
                                </td>
                            <!--  <td><div class="box22 red" data-toggle="tooltip" data-placement="top" title="{{222}}">{{$employee->shift_id}}</div></td>
        <td><div class="box22 green"></div></td>
        <td><div class="box22 blue"> </div></td>-->
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <?php if(date('t')>28):?><td> </td><?php endif;?>
                                <?php if(date('t')>29):?><td> </td><?php endif;?>
                                <?php if(date('t')>30):?><td> </td><?php endif;?>


                            </tr>

                            <?php
                            //dd($Attends);
                            ?>

                        @endforeach

                        </tbody>
                    </table>
                @endif



























                @if($attendances)
                    <div class="card-body">
                        <div class="table-responsive text-center" style="font-size: 10px;">

                            <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr class="text_font font-weight-bolder">
                                    {{--<th>Employee id</th>--}}
                                    <th>Employee Name</th>
                                    <th>Date</th>
                                    <th>Check Type</th>
                                    <th>Shift Timing</th>
                                    <th>Check Time</th>
                                    <th>Time Difference</th>
                                    <th>Attendance Status</th>
                                    <th>Remarks</th>
                                    {{--<th>Edit</th>--}}
                                    {{--<th>Delete</th>--}}


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attendances as $attendance)
                                    <?php
                                    $user_id=$attendance->id;
                                    $user=\App\User::where('employee_number',$attendance->user_id)->first();


                                    //dd($user_id);
                                    //dd($user);

                                    //dd($attendance);


                                    //                            $shift_timing=\App\Shift::where('id',$user->shift_id)->first();



                                    //$shift_timing='10:30';

                                    //                            $shift_timing_start=$shift_timing->shift_start_time;
                                    //
                                    //                            $shift_timing_end=$shift_timing->shift_end_time;



                                    //                            var_dump(\Carbon\Carbon::parse($shift_timing_start)->minute );
                                    //                            var_dump(\Carbon\Carbon::parse($shift_timing_start)->hour );
                                    //
                                    //
                                    //                            var_dump(\Carbon\Carbon::parse($shift_timing_end)->minute );
                                    //
                                    //                            var_dump(\Carbon\Carbon::parse($shift_timing_end)->hour );
                                    //
                                    //                            exit();



                                    //
                                    //                            $formated_checktime=\Carbon\Carbon::parse($attendance->checktime)->toTimeString();
                                    //
                                    //
                                    //                            $formated_shift_timing=\Carbon\Carbon::parse($shift_timing_start)->toTimeString();
                                    //                            $formated_shift_timing_end=\Carbon\Carbon::parse($shift_timing_end)->toTimeString();
                                    //
                                    //
                                    //                            $formated_checktime_minute=\Carbon\Carbon::parse($attendance->checktime)->minute;
                                    //                            $formated_checktime_hours=\Carbon\Carbon::parse($attendance->checktime)->hour;
                                    //
                                    //
                                    //                            $formated_shift_timing_end_hour=\Carbon\Carbon::parse($shift_timing_end)->hour;
                                    //                            $formated_shift_timing_end_minute=\Carbon\Carbon::parse($shift_timing_end)->minute;
                                    //
                                    //
                                    //                            $formated_shift_timing_hour=\Carbon\Carbon::parse($shift_timing_start)->hour;
                                    //                            $formated_shift_timing_minute=\Carbon\Carbon::parse($shift_timing_start)->minute;

                                    //                            $formated_shift_allowance=\Carbon\Carbon::createFromFormat('h:i:s',$shift_allowance);



                                    ?>
                                    {{--<tr>--}}
                                    {{--<td>{{$user->first_name}}</td>--}}
                                    {{--<td>{{$attendance->checkintime}}{{$attendance->checkouttime}}</td>--}}
                                    {{--<td></td>--}}
                                    {{--</tr>--}}




                                    <tr class="text_font">
                                        {{--<td>{{$user->first_name}}&nbsp;{{$user->last_name}}</td>--}}
                                        {{--<td>{{$attendance->checkdate}}</td>--}}

                                        {{--<td>--}}
                                        {{--@if($attendance->checktype==0)--}}
                                        {{--{{"CHECK IN"}}--}}
                                        {{--@endif--}}
                                        {{--@if($attendance->checktype==1)--}}
                                        {{--{{"CHECK OUT"}}--}}
                                        {{--@endif--}}
                                        {{--@if($attendance->checktype==2)--}}
                                        {{--{{"BREAK"}}--}}
                                        {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                        {{--@if($attendance->checktype==0)--}}
                                        {{--{{$formated_shift_timing}}--}}
                                        {{--@endif--}}

                                        {{--@if($attendance->checktype==1)--}}
                                        {{--{{$formated_shift_timing_end}}--}}
                                        {{--@endif--}}


                                        {{--</td>--}}

                                        {{--<td>{{ $formated_checktime}}</td>--}}
                                        {{--<td>--}}
                                        {{--@if($attendance->checktype==0)--}}
                                        {{--{{($formated_checktime_minute+($formated_checktime_hours*60))-($formated_shift_timing_minute+($formated_shift_timing_hour*60))}}--}}
                                        {{--@endif--}}

                                        {{--@if($attendance->checktype==1)--}}
                                        {{--{{(($formated_shift_timing_end_minute+($formated_shift_timing_end_hour*60))-$formated_checktime_minute+($formated_checktime_hours*60))}}--}}
                                        {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                        {{--@if($attendance->checktype==0 && ($formated_checktime_minute+($formated_checktime_hours*60))-($formated_shift_timing_minute+($formated_shift_timing_hour*60))>0 )--}}
                                        {{--{{"Late Check in"}}--}}
                                        {{--@endif--}}


                                        {{--@if($attendance->checktype==0 && ($formated_checktime_minute+($formated_checktime_hours*60))-($formated_shift_timing_minute+($formated_shift_timing_hour*60))<=0 )--}}
                                        {{--{{"On Time Check in"}}--}}
                                        {{--@endif--}}

                                        {{--@if($attendance->checktype==1 && (($formated_shift_timing_end_minute+($formated_shift_timing_end_hour*60))-$formated_checktime_minute+($formated_checktime_hours*60))>0 )--}}
                                        {{--{{"Early Check out"}}--}}
                                        {{--@endif--}}


                                        {{--@if($attendance->checktype==1 && (($formated_shift_timing_end_minute+($formated_shift_timing_end_hour*60))-$formated_checktime_minute+($formated_checktime_hours*60))<=0 )--}}
                                        {{--{{"On time Check out"}}--}}
                                        {{--@endif--}}



                                        {{--</td>--}}


                                        {{--<td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>--}}
                                        {{--<td>--}}
                                        {{--<form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="">--}}
                                        {{--{!! csrf_field() !!}--}}
                                        {{--<button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete  ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>--}}
                                        {{--</form>--}}
                                        {{--</td>--}}


                                    </tr>



                                @endforeach
                                </tbody>
                            </table>
                            <h3>{{ $attendances->links() }}</h3>
                        </div>
                    </div>

                @endif

            </div>
        </div>
    </div>
    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection