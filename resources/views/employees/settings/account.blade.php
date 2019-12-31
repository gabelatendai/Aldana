@extends("employees.layouts.master")
@section("content")
    @include('admin.employees.modals.index')
    @include('admin.delete.deletemodal')
    @include('admin.toast.toast')
    <!-- Begin Page Content -->
    <div class="container-fluid animated fadeInLeft">
            <div class="container-fluid">
                    <div class="card shadow " style="border-radius: 0">
                        <div class="card-header text-center py-0 custom_card_header text-white" style="border-radius: 0">change your password here</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('employee-update-password',Auth::guard('web')->user()->id)}}">
                                {{csrf_field()}}

                                <input type="hidden" value="{{Auth::guard('web')->user()->employee_number}}" name="employee_number" id="employee_number">
                                <input type="hidden" value="{{Auth::guard('web')->user()->id}}" name="id" id="id">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="admission">Your Employment  Number</label>
                                        <input type="text" class="form-control" value="{{Auth::guard('web')->user()->employee_number}}" name="admission" id="admission" >
                                    </div>

                                    <div class="form-group col-md-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">New Password</label>
                                        <input type="password" class="form-control" name="password" id="password" autofocus>
                                        @if ($errors->has('password'))
                                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                                <style>
                                                    #password{
                                                        border-bottom: solid 1px;
                                                        color: red;
                                                    }
                                                </style>
                                    </span>
                                        @endif
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="password-confirm" class="control-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
        </div>
    <!-- End of Add Employee Form -->
    <!-- /.container-fluid -->
@endsection