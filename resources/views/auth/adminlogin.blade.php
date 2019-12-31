@extends('employees.layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card bg-light">
                <div class="card-header"> Admin Login</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" id="userlogin" action="{{ route('adminlogin') }}">
                        {{ csrf_field() }}
                        <div class="form-group $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong class="">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="text-danger bg-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>





                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <a class="btn btn-block btn-link btn-info" href="{{ route('') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>



                                <div class="col-md-4" style="margin-bottom: 6px">
                                    <div class="form-group">
                                        <a class="btn btn-success btn-block" href="{{ route('register') }}">No  Acoount! Register</a>
                                    </div>
                                </div>

                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
