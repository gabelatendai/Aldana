@extends('admin.layout.master')
@section('content')
    @include('admin.toast.toast')
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
        <div class="container-fluid">
            <div class="card " style="border-radius: 0">

                <div class="card-header custom_card_header py-0 text-white text-center" style="border-radius: 0">Add Company Details
                </div>
                
                <div class="card-block">
                    <form class="form-horizontal container-fluid" action="{{route('add_company')}}" method="Post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Company Name">
                                    @if ($errors->has('name'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="motto">Slogan</label>
                                    <input type="text" class="form-control" name="motto" value="{{old('motto')}}" id="motto" placeholder="Company Motto">
                                    @if ($errors->has('motto'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('Motto') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="town">town</label>
                                    <input type="text" name="town" id="town" value="{{old('town')}}" class="form-control " placeholder="Town">
                                    @if ($errors->has('town'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" value="{{old('city')}}" class="form-control " placeholder="City">
                                    @if ($errors->has('city'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="code">Post Office Box</label>
                                    <input class="form-control" id="code" name="code"  value="{{old('code')}}" type="text" placeholder="Post Office Box">
                                    @if ($errors->has('code'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone </label>
                                    <input class="form-control" id="phone"  value="{{old('phone')}}" name="phone" type="tel" placeholder="Phone">
                                    @if ($errors->has('phone'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="col-md-4">
                                <div class="form-group form-group-login">
                                    <label for="image">Company Logo</label>
                                    <table  style="margin: 0 auto;">
                                        <tbody>
                                        <tr>
                                            <td class="photo">
                                                <img class="student-photo" id="showPhoto">
                                                <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: center;background: #ddd;">
                                                <input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="browse">
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="mobile">Mobile Phone</label>
                                    <input type="text" class="form-control" style="font-size: 12px" value="{{old('mobile')}}" name="mobile"
                                           id="mobile" placeholder="mobile">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Email ">
                                    @if ($errors->has('email'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" value="{{old('website')}}" name="website" id="website" placeholder="website">
                                    @if ($errors->has('website'))
                                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="container-fluid     ">
                                <button type="submit" class="btn shadow-none    btn-sm float-right text-white btn-hover color-5 " style="width: 100px;height: 30px">Save</button>
                                <button type="reset" class="btn shadow-none  text-white text-white mb-3 btn-sm float-left s btn-hover color-4 "  style="width: 100px;height: 30px">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
            <br>
@if($companyinfo)
            <div class="card " style="border-radius: 0">
                <div class="card-block">
                    <div class="table-responsive border-0">
                        <table class="table table-hover">
                            <thead class="bg-gradient-primary py-0 text-center text-white" >
                            <tr  style="border-width: 0px;font-size: 8px">
                                <th>NAME</th>
                                <th>MOTTO</th>
                                <th>TOWN</th>
                                <th>CITY</th>
                                <th>CODE</th>
                                <th>PHONE</th>
                                <th>EMAIL</th>
                                <th>MOBILE</th>
                                <th>WEBSITE</th>
                                <th>LOGO</th>
                                <th class="text-info">EDIT</th>
                                <th class="text-danger">DEL</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr style="font-size: 7px">
                                    <td>{{$companyinfo->name}}</td>
                                    <td>{{$companyinfo->motto}}</td>
                                    <td>{{$companyinfo->town}}</td>
                                    <td>{{$companyinfo->city}}</td>
                                    <td>{{$companyinfo->code}}</td>
                                    <td>{{$companyinfo->phone}}</td>
                                    <td>{{$companyinfo->email}}</td>
                                    <td>{{$companyinfo->mobile}}</td>
                                    <td>{{$companyinfo->website}}</td>

                                    @if(env('APP_ENV') === 'production')
                                        <td><img class="img-fluid rounded-circle rounded-5" src="{{asset("public/upload/logo/images/$companyinfo->photo")}}" width="10" height="10" ></td>
                                    @else
                                        <td><img class="img-fluid rounded-circle rounded-5" src="{{asset("upload/logo/images/$companyinfo->photo")}}" width="10" height="10" ></td>
                                    @endif

                                    <td><a class="btn btn-info btn-sm " method="get"  name="student_id" href="{{route('edit_company',$companyinfo->id)}}"><i class="fa fa-edit"></i>&nbsp;&nbsp; Edit</a></td>
                                    <td>
                                        <form class="form-inline form-delete" method="POST" id="formDeleteuser" action="{{route('delete_company',$companyinfo->id)}}">
                                            {!! csrf_field() !!}
                                            <button type="button"  class="btn btn-danger delete btn-sm glyphicon glyphicon-trash" data-title="Delete" data-target="#confirmDelete" data-message="are you sure you want to delete {{$companyinfo->name}} ?" data-toggle="modal" &laquo; id="delete_user" name="confirm_user_delete"><i class="fa fa-trash"></i>&nbsp;&nbsp; Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    @else
    <p class="text-danger text-center">There is no Company information ,We recommend adding Your Company information  </p>
    @endif
        </div>
    @endsection
