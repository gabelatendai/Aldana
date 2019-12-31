@extends('admin.layout.master')
@section('content')
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
        <div class="container-fluid">
                <div class="card shadow " style="border-radius: 0">
                    <div class="card-header text-center text-white py-0 bg-gradient-primary">Edit Staff</div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('staff-update',$staff->id)}}" method="Post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="fname">First name</label>
                                        <input type="text" class="form-control" value="{{$staff->admin_fname}}" name="fname" id="fname">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="lname">Last name</label>
                                        <input type="text" class="form-control" value="{{$staff->admin_lname}}" name="lname" id="lname">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="{{$staff->username}}" id="username">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="number">Staff Number</label>
                                        <input type="text" class="form-control" name="number" value="{{$staff->admin_number}}" id="number">
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="form-group col-md-3 $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="text_font" for="password" class="control-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" >
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div class="form-group col-md-3 $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm" class=" control-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                            <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$staff->email}}" id="email">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="phone">Mobile</label>
                                        <input type="text" class="form-control" name="phone" value="{{$staff->phone}}" id="phone">
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label class="text_font" for="residence">Residence</label>
                                        <input type="text" class="form-control" name="residence" value="{{$staff->residence}}" id="residence">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="text_font" for="role">Roles</label>
                                            <div class="row">
                                                @foreach($roles as $key=>$r)
                                                    <div class="form-group">
                                                        <input type="checkbox" class="checkbox  checkbox-inline text_font" value="{{$r->id}}"   name="role[]" id="role">
                                                        <label class="checkbox-label text-sm text_font"  for="{{$r->role_name}}">{{$r->role_name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <table style="margin: 0 auto;">
                                            <td class="photo">

                                                @if(env('APP_ENV') === 'production')
                                                    <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("public/upload/staff/images/$staff->photo")}}">
                                                @else
                                                    <img class="student-photo" id="showPhoto"  style="width: 150px;height: 150px" src="{{asset("upload/staff/images/$staff->photo")}}">
                                                @endif
                                                <input hidden="" type="file" name="photo"  id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                                <input type="button" name="browse_file" id="browse_file" class=" btn-info btn-block btn-browse" value="browse">
                                            </td>

                                            </tbody>

                                        </table>

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
        <div class="card student-registration-page" style="border-radius: 0">
            <div class="card-block">
                <div class="table-responsive border-0">
                    <table class="table table-hover">
                        <thead >
                        <tr style="border-width: 0px;font-size: 10px">
                            <th class="text_font" >NAME</th>
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
                                <td>

                                    <ol type="1" >
                                        @foreach($staff->roles as $role)
                                            <li class="text_font">{{$role->role_name}}</li>
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
                                    <form class="form-inline form-delete" action="{{route('staff-delete',$staff->id)}}" method="POST" id="formDeleteuser" >
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
