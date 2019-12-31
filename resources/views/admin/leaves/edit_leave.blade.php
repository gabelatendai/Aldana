@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card">
            <form class="form-horizontal " action="{{route('post_leave')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="card border-0    " style="border-radius: 0;">
                    <div class="card-header py-0 text-center text-white  custom_card_header " style="border-radius: 0;">
                        Approve Request
                    </div>
                    <div class="card-block border-0 mx-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input type="hidden" name="leave_name" value="{{$notification->policy->policy}}">
                                        <label for="select_employee">Leave policy</label>
                                        <select id="leave_policy" name="leave_policy" readonly="true" class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                            <option  value="{{$notification->policy->id}}" >{{$notification->policy->policy}}|&nbsp;{{$notification->policy->duration}}|&nbsp;Days</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="leave_start_date">Start Date</label>
                                        <input type="text" class="form-control input_size py-0" readonly="true" value="{{$notification->request_start_date}}" name="leav_start_date" id="leav_start_date">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="leave_end_date">End Date</label>
                                        <input type="text" class="form-control input_size py-0" readonly="true" value="{{$notification->request_end_date}}" name="leav_end_date"  id="leav_end_date">
                                    </div>






                                    <div class="form-group col-md-3">
                                        <label for="select_employee">Employee</label>
                                        <select id="user_id" name="user_id"  class="form-control input_size py-0" readonly="true" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                            <option  value="{{$user->id}}" >{{$user->first_name}}&nbsp;&nbsp; </option>
                                        </select>
                                    </div>

                                    <div class="row w-100 mx-auto">
                                        <div class="form-group col-md-10 mx-auto text-center">
                                            <label for="leave_description">Description</label>
                                            <textarea type="reason" name="leave_description"  readonly="true" rows="3" id="leave_description" class="form-control py-0 text-center" style="border-radius: 50px">{{$notification->description}}</textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>





                    </div>
                    <div class="card-footer my-auto bg-transparent p-0 border-0">
                            <div class="container-fluid">
                                <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Approve</button>
                            </div>
                    </div>





                </div>
            </form>


        </div>





        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">Leaves Requests</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Employee</th>
                            <th class="text_font" >Leave requested</th>
                            <th class="text_font" >Leave Duration</th>
                            <th class="text_font" >Requested Days</th>
                            <th class="text_font" >Leave Start</th>
                            <th class="text_font" >Leave End</th>
                            <th class="text_font" >Days used</th>
                            <th class="text_font" >Days remaining</th>
                            <th class="text_font" >Request Date</th>
                            {{--<th>Request End</th>--}}
                            <th class="text_font" >Request Expires in days</th>
                            <th class="text_font" >Request description</th>
                            <th class="text_font" >Approve Leave</th>
                            <th class="text_font" >Reject</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leave_requests as $leave_request)
                            <tr class="mt-1 py-1">
                                <?php
                                $now = \Carbon\Carbon::now();
                                $start_date = \Carbon\Carbon::parse($leave_request->request_start_date);
                                $end_date = \Carbon\Carbon::parse($leave_request->request_end_date);
                                $user_name=$employees->where('id',$leave_request->user_id)->first();
                                $counter=\App\Policycounter::where('user_id',$user_name->id)->where('policy_id',$leave_request->policy->id)->first();?>
                                <td  class="text_font">{{$user_name->first_name}}</td>
                                <td  class="text_font">{{$leave_request->policy->policy}}</td>
                                <td  class="text_font">{{$leave_request->policy->duration}}</td>
                                <td class="text_font">{{$end_date->diffInDays($start_date)}}</td>
                                <td  class="text_font">{{$leave_request->request_start_date}}</td>
                                <td  class="text_font">{{$leave_request->request_end_date}}</td>
                                <td class="text_font">{{$leave_request->policy->duration-$counter->counter}}</td>
                                <td class="text_font">{{$counter->counter}}</td>
                                <td class="text_font" >{{$leave_request->created_at->diffForHumans()}}</td>
                                {{--<td >{{$leave_request->request_end_date}}</td>--}}
                                <td class="text_font" >{{$end_date->diffInDays($now)}}</td>
                                <td class="text_font" >{{$leave_request->description}}</td>
                                <td><a class="btn btn-info btn-sm "name="student_id" href="{{route('get_notifications',$leave_request->id)}}"><i class="fa fa-clock" style="font-size: 10px"></i>&nbsp;&nbsp;Approve</a></td>
                                <td><a class="btn btn-danger btn-sm "name="student_id" href="{{route('get_notifications_reject',$leave_request->id)}}"><i class="fa fa-clock" style="font-size: 10px"></i>&nbsp;&nbsp;Reject</a></td>
                                {{--<td>--}}
                                {{--<form class=" form-delete " method="POST" id="formDeleteuser" action="{{route('delete_notification',$leave_request->id)}}">--}}
                                {{--{!! csrf_field() !!}--}}
                                {{--<button type="button"  class="btn btn-danger delete_user text-center " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$leave_request->id}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="font-size: 10px"><i class="fa fa-trash"></i>&nbsp;&nbsp; Reject</button>--}}
                                {{--</form>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>



    </div>

    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection