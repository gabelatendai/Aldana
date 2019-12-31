@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <form class="form-horizontal " action="{{route('post_leave')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card border-0   " style="border-radius: 0;">
                <div class="card-header py-0 text-center text-white  custom_card_header" style="border-radius: 0;">
                    Grand Leave
                </div>
                <div class="card-block border-0 mx-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="select_employee" class="text_font">Leave Policy</label>
                                    <select id="leave_policy" name="leave_policy" class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                        <option>Select Leave Policy</option>
                                        @foreach($policies as $key=>$y)
                                            <option  value="{{$y->id}}" >{{$y->policy}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="leave_start_date" class="text_font">Start Date</label>
                                    <input type="text" class="form-control input_size py-0" name="leave_start_date" placeholder="leave start date" id="leave_start_date">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="leave_end_date" class="text_font">End Date</label>
                                    <input type="text" class="form-control input_size py-0" name="leave_end_date" placeholder="leave end date" id="leave_end_date">
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="select_employee" class="text_font">Employee</label>
                                    <select id="user_id" name="user_id" class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >
                                        <option ></option>
                                        @foreach($employees  as $key=>$y)
                                            <option  value="{{$y->id}}" >{{$y->employee_number}} &nbsp;&nbsp; {{$y->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row w-100 mx-auto">
                                    <div class="form-group col-md-10 mx-auto text-center">
                                        <label for="leave_description" class="text_font">Description</label>
                                        <textarea type="reason" name="leave_description" rows="3" id="leave_description" class="form-control py-0 text-center" style="border-radius: 50px"></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                    <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                </div>
            </div>
        </form>






        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 custom_card_header text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">On  Leaves</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table  text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Employee</th>
                            <th class="text_font" >Start Date</th>
                            <th class="text_font" >End  Date</th>
                            {{--<th>Leave Status</th>--}}
                            <th class="text_font" >Dates Remaining</th>
                            <th class="text_font" >Policy</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($leaves as $leave)
                            <tr>
                                <?php
                                $now = \Carbon\Carbon::now();
                                $end_date = \Carbon\Carbon::parse($leave->leave_end_date);
                                $start_date = \Carbon\Carbon::parse($leave->leave_start_date);
                                //$format_end_date = Carbon\Carbon::createFromFormat('d/m/Y', '11/06/1990');
                                ?>
                                <?php $user_name=$employees->where('id',$leave->user_id)->first() ?>
                                <td class="text_font" >{{$user_name->first_name}}</td>
                                <td class="text_font" >{{$start_date->toDateString()}}</td>
                                <td class="text_font" >{{$end_date->toDateString()}}</td>
                                {{--<td>{{$leave->leave_status}}</td>--}}
                                <td class="text_font" >{{($start_date->diffInDays($end_date))-$start_date->diffInDays($now)}}</td>
                                <td class="text_font" >{{$leave->policy->policy}}</td>

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