<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> AL DANA</title>
    <link rel="icon" href="{!! asset('/img/logo_raster.jpg') !!}"/>
    <link href="{{ asset('css/font_awesome/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dnata_hr_main_css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/jquery-ui-git.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrapValidator.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/cd0381aa3322dff4babd137f03829c8c?family=Tahoma" rel="stylesheet" type="text/css"/>
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <style>
        .fade-scale {
            transform: scale(0);
            -webkit-transition: all .25s linear;
            -o-transition: all .25s linear;
            transition: all .25s linear;
        }

        .login_box{
            display: none;
        }

        .list_card:hover{
            cursor: pointer;
        }

        .fade-scale.in {
            opacity: 1;
            transform: scale(1);
        }

    </style>


</head>

<body id="page-top">
<div id="home-overlay"></div>
<section class="training_areas">
    <div class="card   " style="border-radius: 0">
    <div class="card-body">

        <div class="row">

            <div class="col-md-8 mx-auto">
                <a href="">
                    <img class="img-fluid text-center" src="{{asset("/img/com-logo.jpg")}}">
                </a>
            </div>
        </div>

        <p class="text-danger font-weight-bolder text-center mt21">Human Resource</p>
        
        <p class="text-center text-dark mt-0">Sign into your account</p>

    <div class="container-fluid px-1">
    <form class="" method="POST" action="" id="main_login_form">
    {{ csrf_field() }}


    <div class="form-group text-center text-center">
        <select id="select_login" name="select_login text-center" required class="form-control text-center py-0 input-lg  input_size" style="font-size: 14px;!important;height: 30px" >
            <option class="text-center text_font" style="font-size:16px;!important" selected>Select User Type</option>
            <option class="text-center text_font" style="font-size:16px;!important" value="admin_login">Admin</option>
            <option class="text-center text_font" style="font-size:16px;!important" value="employee_login">Employee</option>
        </select>
    </div>


    <div class="form-group  mt-3  {{ $errors->has('username') ? ' has-error' : '' }}">
    <input type="text" class="form-control input-sm  py-3  text-center shadow-none text-dark" autocomplete="off" name="username" id="username" placeholder="User Name" style="font-size: 1rem;border-radius: 0;!important;">
    {{--<label for="email" class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >  Email</label>--}}
    @if ($errors->has('username'))

    <span class="help-block text-danger">
    <strong>{{ $errors->first('username') }}</strong>
    <style>
    #username{
    border-bottom: solid 1px;
    color: red;
    }
    </style>
    </span>
    @endif
    </div>

    <div class="form-group  mt-3 {{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="password"  class="form-control input-sm  py-3 bg-transparent shadow-none text-center text-dark" autofocus="off" name="password" id="password" placeholder="Password" style=";font-size: 1rem">
    {{--<label for="password"  class="label mt-3 text-dark" style="font-size: 1.4rem;color: white" >Password</label>--}}
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
    <div class="text-center mt-3 mb-3 mb-4 p-2">
    {{--<a href="{{ route('password.request') }}" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Forgot Password</a>--}}
    <button type="submit" class="btn btn-danger font-weight-bolder text-white mb-3 mt-3 shadow-none btn-block" style="border-radius: 10px">Login</button>
    </div>
    </form>
    </div>






    {{--<div class="container-fluid px-5" id="employee_login_form" style="display: none" >--}}
            {{--<form class="" method="POST" action="{{ route('login')}}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group  mt-5  {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                    {{--<input type="email" class="form-control input-sm input_size py-3  text-center shadow-none text-dark" autocomplete="off" name="email" id="email" placeholder="Email" style="font-size: 1rem">--}}
                    {{--<label for="email" class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >  Email</label>--}}
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

                {{--<div class="form-group  mt-5 {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                    {{--<input type="password"  class="form-control input-sm input_size py-3 bg-transparent shadow-none text-center text-dark" autofocus="off" name="password" id="password" placeholder="Password" style=";font-size: 1rem">--}}
                    {{--<label for="password"  class="label mt-3 text-dark" style="font-size: 1.4rem;color: white" >Password</label>--}}
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
                    {{--<a href="{{ route('password.request') }}" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Forgot Password</a>--}}
                    {{--<button type="submit" class="btn btn-secondary  font-weight-bolder text-success mb-3 mt-3 shadow-none" style="border-radius: 10px">Login</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}



    </div>

        <div class="card-footer text-center" style="font-family: Tahoma ,sans-serif">
            Designed & Developed by
            <br>
            <span><a href="http://www.aldana-computer.com/"> Al Dana Computer Technology</a></span>
            <br>
            Call: +971 50 726 3456
            <br>
            Email: support@aldana-computer.com
        </div>


    </div>

</section>








































{{--<section class="training_areas">--}}
    {{--<div class="container-fluid mb-5">--}}
        {{--<div class="row text-center mx-auto">--}}
            {{--<div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">--}}
                {{--<div class="container-fluid animated fadeInLeft">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" type="radio" name="login_button" id="admin_login" value="admin_login" checked>--}}
                                {{--<label class="form-check-label" for="exampleRadios1">--}}
                                    {{--Admin--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" type="radio" name="login_button" id="employee_login" value="employee_login" checked>--}}
                                {{--<label class="form-check-label" for="exampleRadios1">--}}
                                    {{--Employee--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


        {{--login employee box--}}
        {{--<div class="row text-center mx-auto employee_login login_box">--}}
            {{--<div class="col-lg-6 col-md-5 col-sm-10 mx-auto trainings text-center">--}}
                {{--<div class="container-fluid animated fadeInLeft">--}}
                    {{--<!-- Add Employee Form -->--}}
                    {{--<form class="" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<div class="card bg-transparent border-0" style="border-radius: 10px">--}}
                            {{--<div class="card-header p-0 bg-gradient-primary text-center text-white text-lowercase"  style="border-radius: 0">Add Designation</div>--}}
                            {{--<div class="card-block">--}}
                                {{--<div class="container-fluid  ">--}}
                                    {{--<form class="form-horizontal bg-transparent" method="post" action="{{route('post_designation')}}">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<div class="form-group   {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                            {{--<input type="email" class="form-control input-sm input_size bg-transparent text-center shadow-none text-white" autocomplete="off" name="email" id="email" placeholder="Email" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                            {{--<label for="email" class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >  Email</label>--}}
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
                                            {{--<input type="password"  class="form-control input-sm input_size bg-transparent shadow-none text-center text-white" autocomplete="off" autofocus="off" name="password" id="password" placeholder="Password" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                            {{--<label for="password"  class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >Password</label>--}}
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
                                            {{--<a href="{{ route('password.request') }}" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Forgot Password</a>--}}
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
        {{--end of employee login box--}}

        {{--admin login box--}}
        {{--<div class="row text-center mx-auto admin_login login_box">--}}
            {{--<div class="col-lg-6 col-md-8 col-sm-10 mx-auto trainings text-center">--}}
                {{--<div class="container-fluid animated fadeInLeft">--}}
                    {{--<div class="card bg-transparent border-0 " style="border-radius: 10px">--}}
                        {{--<div class="card-header p-0 bg-gradient-primary text-center text-white text-lowercase"  style="border-radius: 0">Add Designation</div>--}}
                        {{--<div class="card-block">--}}
                            {{--<div class="container-fluid mt-2 ">--}}
                                {{--<form class="form-horizontal bg-transparent" method="post" action="{{route('admin.login.submit')}}">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<div class="form-group  mb-5 {{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                        {{--<input type="email" class="form-control input-sm input_size bg-transparent text-center text-white shadow-none" value="{{old('email')}}" autocomplete="off" name="email" id="email" placeholder="Email" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                        {{--<label for="email" class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >  Email</label>--}}
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
                                        {{--<input type="password"  class="form-control input-sm input_size bg-transparent shadow-none text-white text-center" autocomplete="off" autofocus="off" name="password" id="password" placeholder="Password" style="border: solid 2px purple;border-radius: 2rem!important;font-size: 1.4rem">--}}
                                        {{--<label for="password"  class="label mt-3 text-white" style="font-size: 1.4rem;color: white" >Password</label>--}}
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
                                        {{--<a href="{{ route('admin.password.request') }}" class="btn font-weight-bolder text-info float-left mb-3 mt-3 shadow-none " style="border-radius: 10px">Forgot Password</a>--}}
                                        {{--<button type="submit" class="btn font-weight-bolder text-success float-right mb-3 mt-3 shadow-none" style="border-radius: 10px">Login</button>--}}
                                    {{--</div>--}}

                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{----}}
        {{----}}
        {{----}}
        {{----}}
        {{----}}
        {{--end of admin login box--}}



    {{--@yield("content")--}}
    {{--</div>--}}
{{--</section>--}}



<!-- end of body contents -->

<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/dnata_hr_main.js') }}"></script>
<script src="{{ asset('js/bootstrapValidator.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/form_validation_client.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.js') }}"></script>
<script src="{{ asset('js/ckeditor.js') }}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script>
    $(document).ready(function(){


        $("#main_login_form").attr('action', '{{ route('admin.login.submit')}}' );

        $('#select_login').on('change', function() {
            if ($("#select_login").val() == "employee_login") {

                $("#main_login_form").attr('action', '{{ route('login')}}' );
                console.log($("#select_login").val())
                // $("#myform").attr('action', 'page1.php');

                console.log($("#main_login_form").attr())

                // $("admin_login_form").hide();
                // $("employee_login_form").show();
            }

            if ($("#select_login").val() == "admin_login") {
                $("#main_login_form").attr('action', '{{ route('admin.login.submit')}}');

                console.log($("#select_login").val())

                console.log($("#main_login_form").attr())

                // $("employee_login_form").hide();
                // $("admin_login_form").show();
            }




        });

        // $('input[type="radio"]').click(function(){
        //     var inputValue = $(this).attr("value");
        //     var targetBox = $("." + inputValue);
        //     $(".login_box").not(targetBox).hide();
        //     $(targetBox).show();
        // });
    });
</script>



</body>
</html>