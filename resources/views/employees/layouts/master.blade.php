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

    <title> AL DANA|Employee</title>


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
    <link href="//db.onlinewebfonts.com/c/cd0381aa3322dff4babd137f03829c8c?family=Tahoma" rel="stylesheet" type="text/css"/>
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

        #official_documents_row{
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

<!-- Page Wrapper -->
<div id="wrapper">
@include('employees.layouts.sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
        @include('employees.layouts.navbar')
        <!-- Begin Page Content -->
            <div class="container-fluid " id="pageTransition">
                <i class="fa fa-external-link-alt" id="full-screen-btn"></i>
                <!-- Body Contents here -->
            @yield("content")
            <!-- end of body contents -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->


        @include('employees.layouts.footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



{{--edit events modal--}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Edit announcement</h4>

                {{--Title:--}}
                {{--<br />--}}
                {{--<input type="text" class="form-control" name="event_name" id="event_name">--}}
                Start time:
                <br />
                <input type="text" class="form-control" name="start_time" id="start_time">

                End time:
                <br />
                <input type="text" class="form-control" name="finish_time" id="finish_time">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="appointment_update" value="Save">
            </div>
        </div>
    </div>
</div>
{{--end of edit events modal--}}


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


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

@yield('script')
{{--{!! $calendar_details->script() !!}--}}
<script>
$(document).ready(function () {


    //remove auto complete on the form inputs
    $(':input').on('focus', function () {
        $(this).attr('autocomplete', 'off')
    });


    //format the date picker
    $(function() {
        $("#passport_issue_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#passport_expiry_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#date_of_birth").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#start_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#document_date_of_issue").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#document_date_of_expiry").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#start_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#start_date_insert").datepicker({ dateFormat: "dd-mm-yy" }).val()


        $("#leave_start_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
        $("#leave_end_date").datepicker({ dateFormat: "dd-mm-yy" }).val()
    });


    //fetch the unread notifications
    function fetchUnreadNotifications(option=''){
        $.ajax({

            url:"{{ route('get_unread_messages') }}",
            data:{option:option},
            dataType:"json",
            method:"GET",
            success:function (data) {

                $('#unread_notification_list').html(data.table_data);
                $('#unread_notification_count').text(data.total_data);
            }
        });

    }
    // fetchUnreadNotifications();
    setInterval(function () {
        fetchUnreadNotifications();
    },1000);



    //==============DELETING WITH A MODAL===================
    $('#confirmDelete').on('show.bs.modal', function (e) {
        var message = $(e.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text(message);
        var title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text(title);
        var form = $(e.relatedTarget).closest('form');
        $(this).find('.modal-footer #confirm').data('form', form);
    });

    $('#confirmDelete').find('.modal-footer #confirm').on('click', function () {
        $(this).data('form').submit();
    });
    //==============END DELETING WITH A MODAL===================



























    $(".toast").toast('show', {
        autohide: false
    });


});

</script>

</body>

</html>