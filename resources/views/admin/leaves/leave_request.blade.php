@extends("admin.layout.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">Leave Requests</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
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
                                <td class="text_font" >{{$user_name->first_name}}</td>
                                <td class="text_font" >{{$leave_request->policy->policy}}</td>
                                <td class="text_font" >{{$leave_request->policy->duration}}</td>
                                <td class="text_font">{{$end_date->diffInDays($start_date)}}</td>
                                <td class="text_font" >{{$leave_request->request_start_date}}</td>
                                <td class="text_font" >{{$leave_request->request_end_date}}</td>
                                <td class="text_font">{{$leave_request->policy->duration-$counter->counter}}</td>

                                    <td class="text_font">{{$counter->counter}}</td>

                                <td  class="text_font">{{$leave_request->created_at->diffForHumans()}}</td>
                                {{--<td >{{$leave_request->request_end_date}}</td>--}}
                                <td  class="text_font">{{$end_date->diffInDays($now)}}</td>


                                <td  class="text_font">{{$leave_request->description}}</td>
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