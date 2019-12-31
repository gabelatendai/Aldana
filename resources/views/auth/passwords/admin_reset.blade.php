@extends('auth.password_master')
@section('content')
    <div class="container-fluid bg-transparent" style="border-radius: 0">
<div class="row">
</div>
</div>
    {{--login employee box--}}
    <div class="row text-center mx-auto">
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">
            <div class="container-fluid">
            <!-- Add Employee Form -->
                    <form class="form-horizontal" method="POST" action="{{ route('admin.password.request') }}">
                        {{ csrf_field() }}
                        <div class="card  bg-transparent border-0" style="border: 0;opacity: .7;">
                            <div class="card-header bg-transparent text-center text-success" style="border: 0;opacity: .7;">Admin Password Reset </div>
                            <div class="card-body">

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group col-md-8 mx-auto  {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class=" control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control bg-transparent" name="email" value="{{ $email or old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-8 mx-auto  {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class=" control-label">Password</label>

                                    <input id="password" type="password" class="form-control bg-transparent" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-8 mx-auto  {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class=" control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control bg-transparent" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="card-footer bg-transparent">
                                <div class="form-group col-md-8 mx-auto" style="border: 0;opacity: .7;">
                                <button type="submit" class="btn btn-link">
                                    Reset Password
                                </button>
                            </div>
                        </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{--end of employee login box--}}




@endsection
