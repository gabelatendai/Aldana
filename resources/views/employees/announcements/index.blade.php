@extends("employees.layouts.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        {{--<form class="form-horizontal " action="{{route('leave_request')}}" method="post" enctype="multipart/form-data">--}}
            {{--{{csrf_field()}}--}}
            {{--<input type="hidden" value="{{Auth::user()->id}}">--}}
            {{--<div class="card border-0 shadow   " style="border-radius: 0;">--}}
                {{--<div class="card-header py-0 text-center text-white  bg-gradient-primary " style="border-radius: 0;">--}}
                    {{--<p class="text-white ">Request Leave</p>--}}
                {{--</div>--}}
                {{--<div class="card-block border-0 mx-2">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="row">--}}
                                {{--<div class="form-group col-md-4">--}}
                                    {{--<label for="select_employee">Leave policy</label>--}}
                                    {{--<select id="leave_policy" name="leave_policy"  required class="form-control input_size py-0" style=" padding: 5px 10px;line-height: 5px;border-radius: 2rem!important;font-size: 0.7rem;" >--}}
                                        {{--<option value=""></option>--}}
                                        {{--@foreach($policies as $key=>$y)--}}
                                            {{--<option  value="{{$y->id}}" >{{$y->policy}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}

                                {{--<div class="form-group col-md-4">--}}
                                    {{--<label for="leave_start_date">Start Date</label>--}}
                                    {{--<input type="text" class="form-control input_size py-0" required name="leave_start_date" placeholder="leave start date" id="leave_start_date">--}}
                                {{--</div>--}}

                                {{--<div class="form-group col-md-4">--}}
                                    {{--<label for="leave_end_date">End Date</label>--}}
                                    {{--<input type="text" class="form-control input_size py-0" required name="leave_end_date" placeholder="leave end date" id="leave_end_date">--}}
                                {{--</div>--}}


                                {{--<div class="form-group col-md-4">--}}
                                    {{--<label for="proof_document">Document</label>--}}
                                    {{--<input type="file"  class="form-control input_size py-0" name="proof_document" placeholder="leave end date" id="proof_document">--}}
                                {{--</div>--}}

                                {{--<div class="row w-100 mx-auto">--}}
                                    {{--<div class="form-group col-md-10 mx-auto text-center">--}}
                                        {{--<label for="leave_description">Description</label>--}}
                                        {{--<textarea type="text" name="leave_description" required rows="3" id="leave_description" class="form-control py-0 text-center" style="border-radius: 50px"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}





                {{--</div>--}}
                {{--<div class="card-footer my-auto bg-transparent p-0 border-0">--}}
                    {{--<div class="text-center m-1 clearfix">--}}
                        {{--<button type="reset" class="btn btn-info float-left  ">Cancel</button>--}}
                        {{--<button type="submit" class="btn btn-success float-right">Request</button>--}}
                    {{--</div>--}}
                {{--</div>--}}





            {{--</div>--}}
        {{--</form>--}}





        <div class="card shadow mb-2 mt-2" style="border-radius: 0">
            <div class="card-header py-0 bg-gradient-primary text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">Announcements to you</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Announcement Date</th>
                            <th class="text_font" >Title</th>
                            <th class="text_font" >Event Date</th>
                            <th class="text_font" >Announcement From</th>
                            <th class="text_font" >Announcement Details</th>
                            <th class="text_font" >Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($messages as $message)
                            <tr>
                                <td class="text_font">{{$message->created_at->diffForHumans()}}</td>
                                <td class="text_font">{{$message->event_name}}</td>
                                <td class="text_font">{{$message->start_date}}</td>
                                <td class="text_font">{{$message->message_from}}</td>
                                <td class="text_font">{{$message->message}}</td>
                                <td>
                                    <form class="form-inline form-delete text-center" method="POST" id="formDeleteuser" action="{{route('delete_message',$message->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$message->event_name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="font-size: 10px"><i class="fa fa-trash"></i>&nbsp;&nbsp; Delete</button>
                                    </form>
                                </td>
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