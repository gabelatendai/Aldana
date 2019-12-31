@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">

        <div class="card shadow">
            <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0">
                <h6 class="m-0  text-white">Add Holiday</h6>
            </div>
        <div class="row mx-auto">
            <div class="col-md-6 ">
                            <div class="holiday_calendar" id='holiday_calendar'></div>
            </div>

            <div class="col-md-6 text-center ">
                <p class="">Color</p>
                <hr>
                <div class="form-group text-center  mx-5 ">
                    <input type="hidden" id="text_color" name="text_color">
                    <div class="colorPickSelector text-center holiday_text_color_selector " id="holiday_text_color_selector"  style="width: 100px;height: 30px"><span class="p-1" style="color: white;z-index: 100">Text</span></div>
                </div>

                <div class="form-group mx-5 ">
                    <input type="hidden" id="background_color" name="background_color">
                    <div class="holiday_background_color_selector colorPickSelector " id="holiday_background_color_selector" style="width: 100px;height: 30px"><span class="p-1" style="color: white;z-index: 100">Background</span></div>
                </div>

                <div class="form-group  mx-5 text-center">
                    <input type="hidden" id="border_color" name="border_color">
                    <div class="colorPickSelector holiday_border_color_selector " id="holiday_border_color_selector"  style="width: 100px;height: 30px"><span class="p-1" style="color: white;z-index: 100">Border</span></div>
                </div>

            </div>

        </div>
        </div>




        <div class="card shadow mb-4 mt-4"  style="border-radius: 0">
            <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0">
                <h6 class="m-0  text-white">Manage Holidays</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Holiday Name</th>
                            <th class="text_font" >Start Date</th>
                            <th class="text_font" >End Date</th>
                            <th class="text_font" >Edit</th>
                            <th class="text_font" >Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($holidays as $holiday)
                            <tr>
                                <td class="text_font">{{$holiday->holiday_name}}</td>
                                <td class="text_font">{{$holiday->start_date}}</td>
                                <td class="text_font">{{$holiday->end_date}}</td>
                                {{--<td>{{$holiday->end_date->diffinDays($holiday->start_date)}}</td>--}}
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('edit_holiday',$holiday->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                <td>
                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('delete_holiday',$holiday->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$holiday->holiday_name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
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






    {{--holiday calendar events modal--}}

    <div class="modal fade modal-primary holiday_calendar_modal" id="holiday_calendar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border-radius: 0;border-top: solid 2px green">

                </div>

                <h5 class="text-center">Add Holiday</h5>
                <div class="modal-body">
                    <div class="container-fluid mt-2">
                        <div class="container mx-auto text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group {{ $errors->has('holiday_name') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control input-sm input_size " required name="holiday_name" id="holiday_name" placeholder="Holiday Name" style="border-radius: 2rem!important;font-size: 0.7rem">
                                            <label for="holiday_name" class="label">Holiday Name</label>
                                            @if ($errors->has('holiday_name'))
                                                <dive class="text-danger mt-4">
                                                    <strong>{{ $errors->first('holiday_name') }}</strong>
                                                    <style>
                                                        #holiday_name{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                            font-size: 10px;
                                                        }
                                                    </style>
                                                </dive>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control input-sm input_size date_text_input " required name="holiday_start_date" id="holiday_start_date" placeholder="Start Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                                            <label for="start_date" class="label">Start Date</label>
                                            @if ($errors->has('start_date'))
                                                <dive class="text-danger mt-4">
                                                    <strong>{{ $errors->first('start_date') }}</strong>
                                                    <style>
                                                        #start_date{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                            font-size: 10px;
                                                        }
                                                    </style>
                                                </dive>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <div class="form-group  {{ $errors->has('end_date') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control input-sm input_size" required name="holiday_end_date" id="holiday_end_date" placeholder="End Date" style="border-radius: 2rem!important;font-size: 0.7rem">
                                            <label for="end_date" class="label">End Date</label>
                                            @if ($errors->has('end_date'))
                                                <dive class="text-danger mt-4">
                                                    <strong>{{ $errors->first('end_date') }}</strong>
                                                    <style>
                                                        #end_date{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                            font-size: 10px;
                                                        }
                                                    </style>
                                                </dive>
                                            @endif
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer text-center">

                    <div class="container-fluid">
                        <button type="submit" id="btn-save-holiday" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                        <button type="reset" data-dismiss="modal" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cance</button>
                    </div>
                </div>

            </div>


        </div>
    </div>

    {{--end of holiday calendar events modal--}}
@endsection