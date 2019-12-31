@extends('landing.landing')
@section('content')
            {{--<div class="row text-center mx-auto">--}}
                {{--<div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">--}}
                    {{--<div class="container-fluid animated fadeInLeft">--}}
                        {{--<!-- Add Employee Form -->--}}
                        {{--<form class="" method="POST" action="{{ route('login') }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="card bg-transparent border-0 mb-2 mt-2" style="border-radius: 10px">--}}
                                {{--<div class="card-header p-0 bg-gradient-primary text-center text-white text-lowercase"  style="border-radius: 0">Add Designation</div>--}}
                                {{--<div class="card-block">--}}
                                    {{--<div class="container-fluid mt-2 ">--}}
                                        {{--<form class="form-horizontal bg-transparent" method="post" action="{{route('post_designation')}}">--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--<div class="form-group  mb-5 {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                                {{--<input type="email" class="form-control input-sm input_size bg-transparent text-center shadow-none" autocomplete="off" name="email" id="email" placeholder="Email" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                                {{--<label for="email" class="label mt-3" style="font-size: 1.4rem;color: white" >  Email</label>--}}
                                                {{--@if ($errors->has('email'))--}}
                                                    {{--<span class="help-block text-danger">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                {{--<style>--}}
                                                    {{--#email{--}}
                                                        {{--border-bottom: solid 1px;--}}
                                                        {{--color: red;--}}
                                                    {{--}--}}
                                                {{--</style>--}}
                                    {{--</span>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}


                                            {{--<div class="form-group  mt-3 {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                                {{--<input type="password"  class="form-control input-sm input_size bg-transparent shadow-none text-center" autocomplete="off" autofocus="off" name="password" id="password" placeholder="Password" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                                {{--<label for="password"  class="label mt-3" style="font-size: 1.4rem;color: white" >Password</label>--}}
                                                {{--@if ($errors->has('password'))--}}
                                                    {{--<span class="help-block text-danger">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                {{--<style>--}}
                                                    {{--#password{--}}
                                                        {{--border-bottom: solid 1px;--}}
                                                        {{--color: red;--}}
                                                    {{--}--}}
                                                {{--</style>--}}
                                    {{--</span>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}

                                            {{--<div class="text-center mt-3 mb-3 mb-4 p-2">--}}
                                                {{--<button type="reset" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Forgot Password</button>--}}
                                                {{--<button type="submit" class="btn font-weight-bolder text-success float-right mb-3 mt-3 shadow-none" style="border-radius: 10px">Login</button>--}}
                                            {{--</div>--}}

                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
    <!--End of training areas section-->
@endsection
