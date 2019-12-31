@extends("admin.layout.master")
@section("content")
    @include('admin.calendar.addcalendar')
    @include('admin.toast.toast')
    @include('admin.delete.deletemodal')
    @include('admin.employees.modals.index')
    <div class="container-fluid animated fadeInLeft">
    <!-- Begin Page Content -->
    <!-- Content Row -->
    <div class="row mb-5">
        <!-- Earnings (Monthly) Card Example -->



        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6 list_card mt-2" id="employees_list_card">--}}
            {{--<div class="card card-img-holder text-default color-2  dashboard_card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-gradient-primary text-center align-self-center shadow-primary ">--}}
                        {{--<a href="" class=""><img src="{{asset("/assets/images/circle.svg")}}" class="card-img-absolute "><i class="fa fa-users fa-3x  text-warning mt-1"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-8">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h5 class="mb-3 text-primary">{{$employees->count()}}</h5>--}}
                            {{--Users </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}







        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">--}}
            {{--<div class="card card-img-holder text-default bg-color">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-primary text-center align-self-center shadow-primary">--}}
                            {{--<a href=""><img src="{{asset("/assets/images/circle.svg")}}" class="card-img-absolute"><i class="lnr lnr-users fs-30  text-white mt-4"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-6">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h1 class="mb-3 text-primary">5</h1>--}}
                            {{--Cash Today--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-2"></div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}






        <div class="col-xl-2 col-md-6 mb-4 list_card dashboard_card" id="employees_list_card">
        <div class="card border-left-primary  py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Employees</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$employees->count()}}</div>
        </div>
        <div class="col-auto">
        <i class="fas fa-users fa-3x " style="color: goldenrod"></i>
        </div>
        </div>
        </div>
        </div>
        </div>





        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6 list_card mt-2" id="employees_list_card">--}}
            {{--<div class="card card-img-holder text-default color-2  dashboard_card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-info text-center align-self-center shadow-primary ">--}}
                            {{--<a href="" class=""><img src="assets/images/circle.svg" class="card-img-absolute "><i class="fa fa-users fa-2x  text-white mt-4"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-8">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h1 class="mb-3 text-primary">{{$employees->count()}}</h1>--}}
                            {{--Users </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}







        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4 list_card" id="department_list_card">
            <div class="card border-left-success  dashboard_card  py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Departments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$departments->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-house-damage fa-3x " style="color: purple"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6 list_card mt-2" id="employees_list_card">--}}
            {{--<div class="card card-img-holder text-default color-2  dashboard_card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-info text-center align-self-center shadow-primary ">--}}
                            {{--<a href="" class=""><img src="{{asset("/assets/images/circle.svg")}}" class="card-img-absolute" height="100%"><i class="fa fa-users fa-2x  text-white mt-4"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-8">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h1 class="mb-3 text-primary">{{$employees->count()}}</h1>--}}
                            {{--Users </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}







        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4 list_card dashboard_card" id="designations_list_card">
            <div class="card border-left-info  py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Designations</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$designations->count()}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-3x " style="color: coral"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pending Requests Card Example -->
        <div class="col-xl-2 col-md-6 mb-4 list_card dashboard_card " id="announcements_list_card">
            <div class="card border-left-warning shadow py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Announcements</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$events->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-music fa-3x " style="color: purple"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6 list_card mt-2" id="employees_list_card">--}}
            {{--<div class="card card-img-holder text-default color-2  dashboard_card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-secondary  text-center align-self-center shadow-primary ">--}}
                            {{--<a href="" class=""><img src="{{asset("/assets/images/circle.svg")}}" class="card-img-absolute "><i class="fa fa-users fa-2x  text-white mt-4"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-8">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h5 class="mb-3 text-primary">{{$employees->count()}}</h5>--}}
                                        {{--Employees--}}
                        {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}


        <a href="{{route("expiring_soon")}}" class="col-xl-2 col-md-6 mb-4 list_card dashboard_card" id="designations_list_card" style="text-decoration: none">
            <div class="card border-left-info   py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Document Expiry</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-danger animated "></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-3x " style="color: red"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>




        {{--<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6 list_card mt-2 " id="employees_list_card">--}}
            {{--<div class="card card-img-holder text-default color-2  dashboard_card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-4">--}}
                        {{--<div class="circle-icon bg-info text-center align-self-center shadow-primary ">--}}
                            {{--<a href="" class=""><img src="{{asset("/assets/images/circle.svg")}}" class="card-img-absolute "><i class="fa fa-users fa-2x  text-white mt-4"></i></a></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-8">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<h1 class="mb-3 text-primary">{{$employees->count()}}</h1>--}}
                            {{--Users </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}



        <a href="{{route('show_requested_leaves')}}" class="col-xl-2 col-md-6 mb-4 list_card dashboard_card" id="designations_list_card" style="text-decoration: none">
            <div class="card border-left-info shadow  py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Leave Requests</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-danger ">
                                        <div class="" id="unread_notification_list">
                                            <span class="badge badge-danger badge-counter  heartBeat infinite" id="unread_notification_count"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hand-holding fa-3x " style="color: green"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>


    </div>

    <!-- Content Row -->




                {{--<button type="button" class="btn btn-sm " id="add_event_id">ADD EVENT&nbsp;<i class="fa fa-plus"></i> </button>--}}
        <div class="row mx-auto text-center mt-5" id="calendar_row">
                    <div class="col-md-6 " id="home-page">

                        <div class="card mt-3 " style="border-radius: 0">
                            <div class="card-header custom_card_header py-0 " style="border-radius: 0">
                                Events
                            </div>

                            <div class="card-body" id="calendar_one">

                            </div>

                        </div>

                        {{--<div id='calendar_one'></div>--}}


                    </div>

                    <div class="col-md-6 text-center text-dark " id="">

                        <div class="row mt-3 mb-5">
                            <div class="col-md-12">
                                <div class="card  border-0" style="border-radius: 0">
                                    <div class="card-header border-0 custom_card_header py-0" style="border-radius: 0">Going to leave</div>

                                    <div class="table-responsive text-center" style="font-size: 10px">
                                        <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th class="text_font" >Employee Name</th>
                                                <th class="text_font" >Department</th>
                                                <th class="text_font" >Start Date</th>
                                                <th class="text_font" >End  Date</th>
                                                <th class="text_font" >Leave Type</th>
                                            </tr>
                                            </thead>
                                            @foreach($employees as $employee)
                                                @php
                                                    $today_day = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->day;
                                                    $today_month = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->month;
                                                    $today_year = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->year;

                                                    $user_joining_date=$employee->start_date;

                                                    $parse_user_joining_date= \Carbon\Carbon::parse($user_joining_date);
                                                    $format_user_joining_date=$parse_user_joining_date->format('Y-m-d H:i:s');

                                                    $real_joining_date=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $format_user_joining_date)->day;
                                                    $real_joining_month=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $format_user_joining_date)->month;
                                                    $real_joining_year=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $format_user_joining_date)->year;
                                                @endphp
                                                @if($today_year-($real_joining_year+$employee->contract_period)==0)
                                                    @if($today_month==$real_joining_month && $real_joining_date>=$today_day)
                                                        <tr style="font-size: 12px" >
                                                            <td class="text_font" >{{$employee->first_name}}&nbsp;&nbsp;{{$employee->last_name}}</td>
                                                            <td class="text_font" >{{$employee->department->department_name}}</td>
                                                            <td class="text_font" >{{$real_joining_date}}</td>
                                                            <td class="text_font" >{{$real_joining_month}}</td>

                                                            @if($today_day==$real_joining_date)
                                                                <p class="text-success animated heartBeat infinite" ><a href="" style="text-decoration: none">{{$employee->first_name}} on &nbsp;&nbsp;&nbsp; {{$real_joining_date}}/{{$real_joining_month}}/{{$today_year}} </a></p>
                                                            @endif
                                                        </tr>

                                                    @endif
                                                @endif
                                            @endforeach
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-5 mb-5">
                            <div class="col-md-12">
                                <div class="card  border-0" style="border-radius: 0">
                                    <div class="card-header border-0 py-0 custom_card_header" style="border-radius: 0">Who is out</div>

                                    <div class="table-responsive text-center" style="color: black">
                                        <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th class="text_font" >Employee Name</th>
                                                <th class="text_font" >Department</th>
                                                <th class="text_font" >Leave Start</th>
                                                <th class="text_font" >Leave End</th>
                                            </tr>
                                            </thead>
                                            @foreach($employee_leaves as $leave)
                                                <?php $user=\App\User::where('id',$leave->user_id)->first() ;
                                                    $now=\Carbon\Carbon::now()->toDateString();
                                                    $start_date=\Carbon\Carbon::parse($leave->start_date)->toDateString();
                                                    $end_date=\Carbon\Carbon::parse($leave->leave_end_date)->toDateString();
                                                ?>
                                                @if($start_date<=$now   && $end_date>$now)
                                                <td class="text_font" >{{$user->first_name}}</td>
                                                <td class="text_font" >{{$user->department->department_name}}</td>
                                                <td class="text_font" >{{$leave->leave_start_date}}</td>
                                                <td class="text_font" >{{$leave->leave_end_date}}</td>
                                                @endif

                                                @endforeach
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-0 mb-5">
                            <div class="col-md-12">

                                <div class="card " style="border-radius: 0;">
                                    <div class="card-header py-0  border-0 custom_card_header" style="border-radius: 0">Birthday Buddies</div>

                                    <div class="table-responsive text-center" style="font-size: 10px">
                                        <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr style="font-size: 14px">
                                                <th class="text_font" >Name</th>
                                                <th class="text_font" >Department</th>
                                                <th class="text_font" >Birth Date</th>
                                                <th class="text_font" >Month</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user_birthday as $birthday)
                                                @php
                                                    $today_day = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->day;
                                                    $today_month = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', \Carbon\Carbon::now())->month;
                                                    $user_birthday=$birthday->date_of_birth;
                                                    $parse_user_birthday = \Carbon\Carbon::parse($user_birthday);
                                                    $format_user_birth=$parse_user_birthday->format('Y-m-d H:i:s');
                                                    $real_birth_Date=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $format_user_birth)->day;
                                                    $real_birth_months=\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $format_user_birth)->month;
                                                @endphp

                                                @if($today_month ==$real_birth_months && $today_day-$real_birth_Date<1)
                                                    <tr style="font-size: 12px" >
                                                        <td class="text_font" ><a href="{{route('full_info',$birthday->id)}}">{{$birthday->first_name}}&nbsp;&nbsp;{{$birthday->last_name}}</a></td>
                                                        <td class="text_font" ><a href="">{{$birthday->department->department_name}}</a></td>
                                                        <td class="text_font" ><a href="">{{$real_birth_Date}}</a></td>
                                                        <td class="text_font" ><a href="">{{$real_birth_months}}</a></td>
                                                    </tr>

                                                    @if($today_day ==$real_birth_Date)

                                                        <input type="hidden" name="birthday_budy_id" id="birthday_budy_id" value="{{$birthday->id}}">

                                                        <span ><i class="fas fa-3x fa-gift text-warning birthday gift_icon animated heartBeat infinite" id="gift_icon">&nbsp;&nbsp;</i><h4>{{$birthday->first_name}} on &nbsp;&nbsp;&nbsp; {{$real_birth_Date}}/{{$real_birth_months}}</h4></span>

                                                    @endif
                                                @endif
                                            @endforeach

                                            </tbody>
                                        </table>

                                    </div>

                                </div>


                            </div>



                        </div>


                    </div>
                </div>




        <div class="no-gutters list_employees" id="list_employees">

        </div>






    <div class="card shadow mb-2 mt-1 animated fadeUp display_hidden " id="employee_dashboard_card"  style="border-radius: 0">
        <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0;border-top: solid orangered 2px">
        </div>
        <div class="card-body">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Employee Code</th>
                        <th>Employee Name</th>
                        <th>Mobile Number</th>
                    </tr>
                    </thead>
                    <tbody id="employees_dashboard">



                    </tbody>
                </table>

            </div>
        </div>

        <div class="card-footer">

            {{--<nav aria-label="Page navigation example " id="pagination_navbar">--}}
                {{--<ul class="pagination justify-content-center">--}}

                    {{--<li class="page-item " id="previous-page"><a class="page-link" href="#" tabindex="-1">Previous</a></li>--}}


                {{--</ul>--}}
            {{--</nav>--}}

        </div>

    </div>






    <div class="card shadow mb-2 mt-1 animated fadeUp display_hidden " id="department_dashboard_card"  style="border-radius: 0">
        <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0;border-top: solid orangered 2px">
        </div>
        <div class="card-body">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Department ID</th>
                        <th>Department Name</th>
                        <th>Number of Employees</th>
                    </tr>
                    </thead>
                    <tbody id="department_dashboard">



                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="card shadow mb-2 mt-1 animated fadeUp display_hidden " id="designation_dashboard_card"  style="border-radius: 0">
        <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0;border-top: solid orangered 2px">
        </div>
        <div class="card-body">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Designation ID</th>
                        <th>Designation Name</th>
                        <th>Number of Employees</th>
                    </tr>
                    </thead>
                    <tbody id="designation_dashboard">



                    </tbody>
                </table>

            </div>
        </div>
    </div>




    <div class="card shadow mb-2 mt-1 animated fadeUp display_hidden " id="announcements_dashboard_card"  style="border-radius: 0">
        <div class="card-header p-0 bg-gradient-primary text-center"  style="border-radius: 0;border-top: solid orangered 2px">
        </div>
        <div class="card-body">
            <div class="table-responsive text-center" style="font-size: 10px">
                <table class="table text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Events Title</th>
                        <th>Start Date End Date</th>
                        <th>Event End Date</th>
                    </tr>
                    </thead>
                    <tbody id="announcents_dashboard">



                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
@endsection