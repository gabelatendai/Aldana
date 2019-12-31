@extends('admin.layout.master')
@section('content')
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
        <div class="container-fluid">
            <div class="card border-0 " style="border-radius: 0">
                    <div class="card-header text-center custom_card_header py-0 text-center text-white" style="border-radius: 0">Add Admin</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('add-staff')}}" method="Post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-md-3  {{ $errors->has('fname') ? ' has-error' : '' }}">
                                    <label class="text_font" for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname">
                                    @if ($errors->has('fname'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3 {{ $errors->has('lname') ? ' has-error' : '' }}">
                                    <label class="text_font" for="lname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lname">
                                    @if ($errors->has('lname'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            <div class="form-group col-md-3">
                                <label class="text_font" for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                                @if ($errors->has('username'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                            </div>

                            <div class="form-group col-md-3">
                                <label class="text_font" for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                                @if ($errors->has('title'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="text_font" for="number">Staff Number</label>
                                    <input type="text" class="form-control" name="number" id="number">
                                    @if ($errors->has('number'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="text_font" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label class="text_font" ">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" >
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>





                                <div class="col-md-3 mt-5">
                                    <div class="form-group  ">
                                        <table style="margin: 0 auto;">
                                            <td class="photo">
                                                <img class="student-photo" id="showPhoto">
                                                <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                            </td>
                                            <tr>
                                                <td style="text-align: center;background: #ddd;">
                                                    <input type="button" name="browse_file"  id="browse_file" class="form-control bg-dark text-white btn-browse" value="Photo" style="border-radius: 0">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>







                                    {{--<div class="form-group form-group-login col-md-2">--}}
                                        {{--<table  style="margin: 0 auto;">--}}
                                            {{--<thead>--}}
                                            {{--<tr class="info">--}}
                                                {{--<label for="image">photo</label>--}}
                                            {{--</tr>--}}
                                            {{--</thead>--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<td class="photo">--}}
                                                    {{--<img  class="student-photo" id="showPhoto">--}}
                                                    {{--<input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}

                                            {{--<tr>--}}
                                                {{--<td style="text-align: center;background: #ddd;">--}}
                                                    {{--<input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="browse">--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}

                                        {{--</table>--}}
                                    {{--</div>--}}

                            </div>




                            <div class="row">




                                <div class="form-group col-md-3{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="text_font" for="password-confirm" class=" control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                    @endif
                                </div>



                                <div class="form-group col-md-3">
                                    <label class="text_font" for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                    @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="text_font" for="residence">Residence</label>
                                    <input type="text" class="form-control" name="residence" id="residence">
                                    @if ($errors->has('residence'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('residence') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="text_font" for="role">role</label>
                                    <div class="row">
                                    @foreach($roles as $key=>$r)
                                                <div class="form-group">
                                                    <input type="checkbox" class="checkbox  checkbox-inline" value="{{$r->id}}"   name="role[]" id="role">
                                                    <label class="checkbox-label text-sm" for="{{$r->role_name}}">{{$r->role_name}}</label>
                                                </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>


                            <div class="container-fluid">
                                <button type="submit" class="btn shadow-none   mb-3  btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                <button type="reset" class="btn shadow-none text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

    <hr>

    <div class="container-fluid">
        <div class="card border-0 " style="border-radius: 0">
            <div class="card custom_card_header border-0" style="border-radius: 0;">Manage Adminstrators</div>
            <div class="card-body">
                <div class="table-responsive border-0">
                    <table class="table table-hover">
                        <thead >
                        <tr>
                            <th class="text_font">NAME</th>
                            <th class="text_font">NUMBER</th>
                            <th class="text_font">EMAIL</th>
                            <th class="text_font">PHONE</th>
                            <th class="text_font">RESIDENCE</th>
                            <th class="text_font">ROLE</th>
                            <th class="text_font">PHOTO</th>
                            <th class="text-info">Edit</th>
                            <th class="text-danger">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($staffs as $staff)
                            <tr>
                                <td class="text_font">{{$staff->admin_fname.''.$staff->admin_lname}}</td>
                                <td class="text_font">{{$staff->admin_number}}</td>
                                <td class="text_font">{{$staff->email}}</td>
                                <td class="text_font">{{$staff->phone}}</td>
                                <td class="text_font">{{$staff->residence}}</td>
                                <td class="text_font">
                                    <ol type="1" >
                                        @foreach($staff->roles as $role)
                                            <li>{{$role->role_name}}</li>
                                        @endforeach
                                    </ol>

                                </td>


                                @if(env('APP_ENV') === 'production')
                                    <td><img class="img-fluid rounded-circle rounded-5" src="{{asset("/public/upload/staff/images/$staff->photo")}}" width="10" height="10" ></td>
                                @else
                                    <td><img class="img-fluid rounded-circle rounded-5" src="{{asset("/upload/staff/images/$staff->photo")}}" width="10" height="10" ></td>
                                @endif
                                <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('staff-edit',$staff->id)}}"><i class="fa fa-edit"></i>&nbsp;&nbsp; Edit</a></td>
                                <td>
                                    <form class="form-delete" action="{{route('staff-delete',$staff->id)}}" method="POST" id="formDeleteuser" >
                                        {!! csrf_field() !!}
                                        <button type="button"  class="btn btn-danger delete_user glyphicon glyphicon-trash" data-title="Delete Staff" data-target="#confirmDelete" data-message="are you sure you want to delete {{$staff->admin_fname.''.$staff->admin_lname}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete"><i class="fa fa-trash"></i>&nbsp;&nbsp; Delete</button>
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
    @endsection
