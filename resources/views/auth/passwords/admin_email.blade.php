@extends('auth.password_master')
@section('content')
    {{--password resset admin box--}}
    <div class="row text-center mx-auto">
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">
            <div class="container-fluid">
            <!-- Add Employee Form -->
                <form class="" method="POST" action="{{ route('admin.password.email') }}">
                    {{ csrf_field() }}
                    @include('admin.toast.toast')
                    <div class="card bg-transparent border-0" style="border-radius: 10px">
                        <div class="card-header py-0 border-0 bg-transparent text-center  text-lowercase mb-5"  style="border-radius: 0">Enter your Email</div>
                        <div class="card-block">
                            <div class="container-fluid  ">
                                <form class="form-horizontal bg-transparent" method="post" action="{{ route('admin.password.email') }}">
                                    {{csrf_field()}}
                                    <div class="form-group   {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="email" value="{{old('email')}}" class="form-control input-sm input_size bg-transparent text-center shadow-none" autocomplete="off" name="email" id="email" placeholder="Email" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">
                                        <label for="email" class="label mt-3" style="font-size: 1.4rem;color: white" >  Email</label>
                                        @if ($errors->has('email'))
                                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                                <style>
                                                    #email{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="text-center col-md-3 mt-3 mx-auto mb-3 mb-4">
                                        <button type="submit" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Send Reset link</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--password resset admin box--}}



    {{--<div class="container-fluid content_holder">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 mx-auto">--}}
            {{--<div class="card bg-light mx-auto">--}}
                {{--<div class="card-header">Admin Reset Password</div>--}}
                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Send Password Reset Link--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
