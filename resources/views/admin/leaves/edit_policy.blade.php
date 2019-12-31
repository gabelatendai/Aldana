@extends("admin.layout.master")
@section("content")
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
        <!-- Add Employee Form -->
        <div class="card  mb-2 mt-2" style="border-radius: 0">
            <div class="card-header p-0  custom_card_header text-center text-white text-lowercase"  style="border-radius: 0">Edit Policy</div>
            <div class="card-block">
                <div class="container-fluid mt-2 ">
                    <form class="form-horizontal mt-5 " method="post" action="{{route('post_policy')}}">

                        {{csrf_field()}}
                        <div class="row">

                            <div class="form-group col-md-4 mb-5 {{ $errors->has('policy') ? ' has-error' : '' }}">
                                <input class="form-control input-sm input_size " value="{{$policy->policy}}" name="policy" id="policy" placeholder="policy" style="border-radius: 2rem!important;font-size: 0.7rem">
                                <label for="policy" class="label">Policy</label>
                                @if ($errors->has('policy'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('policy') }}</strong>
                                                <style>
                                                    #policy{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                                @endif
                            </div>


                            {{--<div class="form-group col-md-4 mb-5 {{ $errors->has('policy') ? ' has-error' : '' }}">--}}
                            {{--<input class="form-control input-sm input_size " name="duration" id="duration" placeholder="Duration" style="border-radius: 2rem!important;font-size: 0.7rem">--}}
                            {{--<label for="duration" class="label">Duration</label>--}}
                            {{--@if ($errors->has('duration'))--}}
                            {{--<span class="help-block text-danger">--}}
                            {{--<strong>{{ $errors->first('duration') }}</strong>--}}
                            {{--<style>--}}
                            {{--#duration{--}}
                            {{--border-bottom: solid 1px;--}}
                            {{--color: red;--}}
                            {{--}--}}
                            {{--</style>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}



                            <div class="form-group col-md-4 mb-5 {{ $errors->has('policy') ? ' has-error' : '' }}">
                                <input class="form-control input-sm input_size " name="duration" id="duration" value="{{$policy->duration}}" placeholder="Duration in days" style="border-radius: 2rem!important;font-size: 0.7rem">
                                <label for="duration" class="label">Duration in days</label>
                                @if ($errors->has('duration'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                                <style>
                                                    #duration{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                                @endif
                            </div>


                        </div>




                        <div class="container-fluid">
                            <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Update</button>
                            <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>




        <div class="card  mb-4 mt-4"  style="border-radius: 0">
            <div class="card-header p-0 custom_card_header text-center"  style="border-radius: 0">
                <h6 class="m-0  text-white">Manage Policies</h6>


            </div>
            <div class="card-body">
                <div class="table-responsive text-center" style="font-size: 10px">
                    <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text_font" >Policy</th>
                            <th class="text_font" >Duration</th>
                            <th class="text_font" >Edit</th>
                            <th class="text_font" >Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($polices as $policy)
                            <tr>
                                <td class="text_font" >{{$policy->policy}}</td>
                                <td class="text_font" >{{$policy->duration}}</td>
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('edit_policy',$policy->id)}}" style="width: 100px;height: 30px"><i class="fa fa-edit" style="font-size: 10px;color: white"></i>&nbsp;Edit</a></td>
                                <td>
                                    <form class=" form-delete text-center shadow-none" method="POST" id="formDeleteuser" action="{{route('delete_policy',$policy->id)}}">
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user text-center shadow-none py-0 " data-title="Delete Employee" data-target="#confirmDelete" data-message="are you sure you want to delete {{$policy->policy}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete" style="width: 100px;height: 30px"><i class="fa fa-trash" style="font-size: 10px;color: white"></i>&nbsp;Delete</button>
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