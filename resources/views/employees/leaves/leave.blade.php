@extends("employees.layouts.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card border-0   " style="border-radius: 0;">
            <div class="card-header py-0 text-center text-white  custom_card_header " style="border-radius: 0;">Request Leave</div>
        <form class="form-horizontal " action="{{route('leave_request')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" value="{{Auth::user()->id}}">

                    <div class="card-block border-0 mx-2">
                        <div class="row mx-auto">
                            <div class="col-md-12">
                                <div class="row mx-auto text-center">


                                    <div class="form-group col-md-2 text-center mx-auto">
                                        <label for="select_employee">Leave Type</label>
                                        <select id="leave_policy" name="leave_policy"  required class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                            <option value=""></option>
                                            @foreach($policies as $key=>$y)
                                                <option id="{{$y->duration}}" value="{{$y->id}}" >{{$y->policy}}&nbsp;|&nbsp; {{$y->duration}}-Days</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-md-2 text-center mx-auto">
                                        <label for="leave_start_date">Start Date</label>
                                        <input type="text" class="form-control input_size py-0" required name="leave_start_date" placeholder="leave start date" id="leave_start_date">
                                    </div>


                                    <div class="form-group col-md-2 text-center mx-auto">
                                        <label for="leave_start_date">End Date</label>
                                        <input type="text" class="form-control input_size py-0" required name="leave_end_date" placeholder="leave End date" id="leave_end_date">
                                    </div>


                                    <div class="form-group col-md-2 text-center mx-auto">
                                        <label for="proof_document">Document</label>
                                        <input type="file"  class="form-control input_size py-0" name="proof_document" placeholder="leave end date" id="proof_document">
                                    </div>




                                    <div class="row w-100 mx-auto">
                                        <div class="form-group col-md-11 mx-auto text-center">
                                            <label for="leave_description">Description</label>
                                            <textarea type="text" name="leave_description" required rows="3" id="leave_description" class="form-control text-left" style="border-radius: 50px"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>





                    </div>






                    <div class="card-footer my-auto bg-transparent p-0 border-0">
                        <div class="container-fluid">
                            <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                            <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>
                    </div>
        </form>
        </div>







        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                    Leaves Requests
            </div>

            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Leave Type</th>

                            <th class="text_font" >Requested Days</th>
                            <th class="text_font" >Leave Start</th>
                            <th class="text_font" >Leave End</th>
                            <th class="text_font" >Leave Policy</th>
                            <th class="text_font" >Days used</th>
                            <th class="text_font" >Days remaining</th>
                            <th class="text_font" >Request Date</th>
                            {{--<th>Request End</th>--}}
                            <th>Request Expires in days</th>
                            <th>Request description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leave_requests as $leave_request)
                            <tr class="mt-1 py-1">
                                <?php
                                $now = \Carbon\Carbon::now();
                                $start_date = \Carbon\Carbon::parse($leave_request->request_start_date);
                                $end_date = \Carbon\Carbon::parse($leave_request->request_end_date);
//                                $user_name=$employees->where('id',$leave_request->user_id)->first();
                                $counter=\App\Policycounter::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->where('policy_id',$leave_request->policy->id)->first();?>
                                <td  class="text_font" >{{$leave_request->policy->policy}}</td>
                                <td class="text_font" >{{$end_date->diffInDays($start_date)}}</td>
                                <td class="text_font"  >{{$leave_request->request_start_date}}</td>
                                <td class="text_font"  >{{$leave_request->request_end_date}}</td>
                                <td class="text_font"  >{{$leave_request->policy->duration}}</td>
                                <td class="text_font" >{{$leave_request->policy->duration-$counter->counter}}</td>
                                <td class="text_font" >{{$counter->counter}}</td>
                                <td  class="text_font" >{{$leave_request->created_at->diffForHumans()}}</td>
                                {{--<td >{{$leave_request->request_end_date}}</td>--}}
                                <td  class="text_font" >{{$end_date->diffInDays($now)}}</td>


                                <td class="text_font" >{{$leave_request->description}}</td>
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

        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">On  Leaves</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Start Date</th>
                            <th>End  Date</th>
                            {{--<th>Leave Status</th>--}}
                            <th>Dates Remaining</th>
                            <th>Policy</th>
                        </tr>
                        </thead>
                        <tbody>

                        {{--'leave_start_date','leave_end_date','leave_status','leave_description','policy_id','user_id'--}}

                        @foreach($leaves as $leave)
                            <tr>
                                <?php
                                $now = \Carbon\Carbon::now();
                                $end_date = \Carbon\Carbon::parse($leave->leave_end_date);
                                $start_date = \Carbon\Carbon::parse($leave->leave_start_date);
                                //$format_end_date = Carbon\Carbon::createFromFormat('d/m/Y', '11/06/1990');

                                ?>
                                <td>{{$start_date->toDateString()}}</td>
                                <td>{{$end_date->toDateString()}}</td>
                                <td>{{$leave->leave_status}}</td>
                                <td>{{($start_date->diffInDays($end_date))-$start_date->diffInDays($now)}}</td>
                                <td>{{$leave->policy->policy}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>






        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">Leave Policy Counter</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Policy Name</th>
                            <th>Policy Days</th>
                            <th>Days Used</th>
                            <th>Days Remaining</th>
                        </tr>
                        </thead>
                        <tbody>

                        {{--'leave_start_date','leave_end_date','leave_status','leave_description','policy_id','user_id'--}}

                        @foreach($policies as $policy)
                            <tr>
                                <?php
                                $now = \Carbon\Carbon::now();
//                                $end_date = \Carbon\Carbon::parse($leave->leave_end_date);
//                                $start_date = \Carbon\Carbon::parse($leave->leave_start_date);
                                $used_days=\App\Policycounter::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->where('policy_id',$policy->id)->get();

                                $days_remaining=$used_days;
                                //$format_end_date = Carbon\Carbon::createFromFormat('d/m/Y', '11/06/1990');
                                ?>
                                <td>{{$policy->policy}}</td>
                                <td>{{$policy->duration}}</td>


                                @if($used_days)
                                <td>
                                @foreach($days_remaining as $remaining)
                                {{$policy->duration-$remaining->counter}}
                                @endforeach
                                </td>
                                <td>
                                @foreach($days_remaining as $remaining)
                                {{$remaining->counter}}
                                @endforeach
                                </td>
                                @endif

                                {{--@if($used_days->count()<0)--}}
                                {{--<td>--}}
                                    {{--@foreach($days_remaining as $remaining)--}}
                                        {{--{{$policy->duration}}--}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--@foreach($days_remaining as $remaining)--}}
                                        {{--{{0}}--}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                                {{--@endif--}}



                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>










    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection