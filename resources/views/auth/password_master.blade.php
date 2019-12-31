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
    <div class="container-fluid">
        @yield("content")
        </div>

    </div>
</section>



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
        $('input[type="radio"]').click(function(){
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".login_box").not(targetBox).hide();
            $(targetBox).show();
        });

        
        $(".toast").toast('show', {
            autohide: false
        });

    });
</script>



</body>
</html>