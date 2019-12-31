@extends("admin.layout.master")
@section("content")
    <!-- Begin Page Content -->
    @include('admin.toast.toast')
    @include('admin.delete.deletemodal')
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card shadow mb-2" style="border-radius: 0">
            <div class="card-header p-0 bg-gradient-primary text-center text-white" style="border-radius: 0">Add Shift</div>
            <div class="card-block">
                <div class="container-fluid">
                    <form class="form-horizontal user" method="POST" action="{{route('post_shift')}}">
                        {{csrf_field()}}

                        <div class="row">

                            <div class="col-md-2">
                                <div class="row mx-auto">
                                    <div class="col-md-6 mx-auto text-center">
                                        <input type="hidden" id="shift_color" name="shift_color">
                                        <div class="colorPickSelector bg-secondary  " id="shift_colorPickSelector">Color</div>
                                    </div>
                                </div>
                                <hr class="bg-gradient-primary">
                                <div class="row">
                                    <div class="col-md-6 no-gutters">
                                        <div class="input-group {{ $errors->has('split_shift_radio') ? ' has-error' : '' }}">
                                            <label for="" style="font-size: 9px">Split</label>
                                            <input type="radio" class="form-control text-left input-sm input_size split_shift_radio " value="split_shift"  name="shift_radio" id="split_shift_radio"  style="border-radius: 2rem!important;font-size: 0.7rem">
                                            @if ($errors->has('split_shift_radio'))
                                                <dive class="text-danger mt-4">
                                                    <strong>{{ $errors->first('split_shift_radio') }}</strong>
                                                    <style>
                                                        #split_shift_radio{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                            font-size: 10px;
                                                        }
                                                    </style>
                                                </dive>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 no-gutters">
                                        <div class="input-group {{ $errors->has('salary_period') ? ' has-error' : '' }}">
                                            <label for="" style="font-size: 9px">One Shift</label>
                                            <input type="radio" class="form-control text-left input-sm input_size payment_method " value="full_shift" name="shift_radio" id="full_shift_radio"  style="border-radius: 2rem!important;font-size: 0.7rem">
                                            @if ($errors->has('salary_period'))
                                                <dive class="text-danger mt-4">
                                                    <strong>{{ $errors->first('salary_period') }}</strong>
                                                    <style>
                                                        #salary_period{
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











                            <div class="col-md-10 " id="split_shift_column" style="display: none">
                                <div class="row mx-auto">
                                    <div class="col-md-3 mx-auto">
                                        <div class="form-group mx-auto {{ $errors->has('split_shift_name') ? ' has-error' : '' }}">
                                            <label for="split_shift_name">Shift Name</label>
                                            <input type="text" name="split_shift_name" id="split_shift_name" class="form-control py-0"  placeholder="Shift Name">
                                            @if ($errors->has('split_shift_name'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('split_shift_name') }}</strong>
                                                    <style>
                                                        #split_shift_name{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group mx-auto {{ $errors->has('first_half_start_time') ? ' has-error' : '' }}">
                                            <label for="first_half_start_time">First Half</label>
                                            <input type="text" name="first_half_start_time" id="first_half_start_time" class="form-control py-0 clockpicker"  placeholder="Start Time">
                                            @if ($errors->has('first_half_start_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('first_half_start_time') }}</strong>
                                                    <style>
                                                        #first_half_start_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group mx-auto {{ $errors->has('first_half_end_time') ? ' has-error' : '' }}">
                                            <label for="first_half_end_time">First Half</label>
                                            <input type="text" name="first_half_end_time" id="first_half_end_time" class="form-control py-0 clockpicker"  placeholder="End Time">
                                            @if ($errors->has('first_half_end_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('first_half_end_time') }}</strong>
                                                    <style>
                                                        #first_half_end_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-md-2">
                                        <div class="form-group mx-auto {{ $errors->has('second_half_start_time') ? ' has-error' : '' }}">
                                            <label for="second_half_start_time">Second Half</label>
                                            <input type="text" name="second_half_start_time" id="second_half_start_time" class="form-control py-0 clockpicker"  placeholder="Start Time">
                                            @if ($errors->has('second_half_start_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('second_half_start_time') }}</strong>
                                                    <style>
                                                        #second_half_start_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group mx-auto {{ $errors->has('second_half_end_time') ? ' has-error' : '' }}">
                                            <label for="second_half_end_time">Second Half</label>
                                            <input type="text" name="second_half_end_time" id="second_half_end_time" class="form-control py-0 clockpicker"  placeholder="End Time">
                                            @if ($errors->has('second_half_end_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('second_half_end_time') }}</strong>
                                                    <style>
                                                        #second_half_end_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                        <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                                    </div>
                                </div>





                            </div>




                            <div class="col-md-10" style="display: none" id="full_shift_column">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mx-auto {{ $errors->has('full_shift_name') ? ' has-error' : '' }}">
                                            <label for="shift_name">Shift Name</label>
                                            <input type="text" name="full_shift_name" id="full_shift_name" class="form-control py-0"  placeholder="Shift Name">
                                            @if ($errors->has('full_shift_name'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('full_shift_name') }}</strong>
                                                    <style>
                                                        #full_shift_name{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mx-auto {{ $errors->has('full_start_time') ? ' has-error' : '' }}">
                                            <label for="full_start_time">Start Time</label>
                                            <input type="time" name="full_start_time" id="full_start_time" class="form-control py-0 clockpicker"  placeholder="Start Time">
                                            @if ($errors->has('full_start_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('full_start_time') }}</strong>
                                                    <style>
                                                        #full_start_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mx-auto {{ $errors->has('full_end_time') ? ' has-error' : '' }}">
                                            <label for="full_end_time">End time</label>
                                            <input type="time" name="full_end_time" id="full_end_time" class="form-control py-0 clockpicker"  placeholder="End Time">
                                            @if ($errors->has('full_end_time'))
                                                <div class="help-block text-danger text-xs mt-5">
                                                    <strong>{{ $errors->first('full_end_time') }}</strong>
                                                    <style>
                                                        #full_end_time{
                                                            border-bottom: solid 1px;
                                                            color: red;
                                                        }
                                                    </style>
                                                </div>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="container-fluid">
                                        <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                        <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="card shadow mb-1 mt-1" style="border-radius: 0">
            <div class="card-header py-0 bg-gradient-primary text-center" style="border-radius: 0">
                <h6 class="m-0  text-white">Manage Shifts</h6>
            </div>
            <div class="card-body border-0" >
                <div class="table-responsive text-center" style="font-size: 10px;border-radius: 0">
                    <table class="table  text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text_font">
                            <th class="text_font">Shift Name</th>
                            {{--<th>Shift Type</th>--}}
                            <th class="text_font">Shift Start </th>
                            <th class="text_font">shift  End</th>
                            <th class="text_font">Shift Start</th>
                            <th class="text_font">Shift End</th>
                            <th class="text_font text-left">Shift Color</th>
                            <th class="text_font">Edit</th>
                            <th class="text_font">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($shifts as $shift)
                            <tr class="text_font">
                                <td class="text_font" >{{$shift->shift_name}}</td>
                                {{--<td>{{$shift->shift_type}}</td>--}}
                                <td class="text_font">{{$shift->first_half_start_time}}</td>
                                <td class="text_font">{{$shift->first_half_end_time}}</td>
                                <td class="text_font">{{$shift->second_half_start_time}}</td>
                                <td class="text_font">{{$shift->second_half_end_time}}</td>

                                <td><div class="colorPickSelector" style=background-color:{{$shift->shift_color}}!important;"></div></td>
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('shift_edit',$shift->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                <td>
                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('shift_delete',$shift->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$shift->shift_name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <h3>{{ $shifts->links() }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection