<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
@if($company_info)
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('show_dashboard')}}">
        <div class="sidebar-brand-icon">
            @if(env('APP_ENV') === 'production')
                <img class="img-fluid rounded-5  "  width="120" height="80" src="{{asset("public/upload/logo/images/$company_info->photo")}}">
            @else
                <img class="img-fluid  rounded-5"  width="120" height="80" src="{{asset("upload/logo/images/$company_info->photo")}}">
            @endif
        </div>
        <div class="sidebar-brand-text mx-3 text-success">{{$company_info->name}}</div>
    </a>
    @else
    <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('show_dashboard')}}">
            <div class="sidebar-brand-icon">
                <img class="img-profile " src="{{asset('img/logo_raster.jpg')}}" width="120" height="80" style="border-top-right-radius:15px ">
            </div>
            <div class="sidebar-brand-text mx-3">HRM</div>
        </a>
@endif

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('show_dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#account" aria-expanded="true"
           aria-controls="account">
            <i class="fas fa-fw fa-cog"></i>
            <span>Account Settings</span>
        </a>
        <div id="account" class="collapse" aria-labelledby="account" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('company_seetings')}}">Company Setup</a>
                <a class="collapse-item" href="{{route('staff-form')}}">Manage Admins</a>
                {{--<a class="collapse-item" href="{{route('show_roles')}}">Roles/Permision</a>--}}
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#employees" aria-expanded="true"
           aria-controls="employees">
            <i class="fas fa-fw fa-users"></i>
            <span>Employees</span>
        </a>
        <div id="employees" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_employees')}}">Manage Employees</a>
                <a class="collapse-item" href="{{route('add_employees')}}">Add Employees</a>
                <a class="collapse-item" href="{{route('show_shifts')}}">Shifts</a>
                <a class="collapse-item" href="{{route('get_holiday')}}">Manage Holidays</a>
                {{--<a class="collapse-item" href="{{route('add_employees')}}">Schedule</a>--}}
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#departments" aria-expanded="true"
           aria-controls="departments">
            <i class="fas fa-fw fa-house-damage"></i>
            <span>Departments</span>
        </a>
        <div id="departments" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_departments')}}">Manage Departments</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#designations" aria-expanded="true"
           aria-controls="designations">
            <i class="fas fa-fw fa-chart-pie"></i>
            <span>Designations</span>
        </a>
        <div id="designations" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_designations')}}">Manage</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#leave" aria-expanded="true"
           aria-controls="leave">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Leave</span>
        </a>
        <div id="leave" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_leaves')}}">Administer Leave</a>
                <a class="collapse-item" href="{{route('show_policy')}}">Add policy</a>
                <a class="collapse-item" href="{{route('show_requested_leaves')}}">leave requests</a>



            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reports" aria-expanded="true"
           aria-controls="reports">
            <i class="fas fa-fw fa-book"></i>
            <span>Reports</span>
        </a>
        <div id="reports" class="collapse" aria-labelledby="reports" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_employees')}}">Manage</a>
            </div>
        </div>
    </li>

    {{--<li class="nav-item">--}}
        {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#announcements" aria-expanded="true"--}}
           {{--aria-controls="announcements">--}}
            {{--<i class="fas fa-fw fa-lightbulb"></i>--}}
            {{--<span>Announcements</span>--}}
        {{--</a>--}}
        {{--<div id="announcements" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<a class="collapse-item" href="{{route('show_announcements')}}">Manage</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#attendance" aria-expanded="true"
           aria-controls="leave">
            <i class="fas fa-fw fa-clock"></i>
            <span>Attendance</span>
        </a>
        <div id="attendance" class="collapse" aria-labelledby="attendance" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_attendances')}}">Manage Attendances</a>
            </div>
        </div>
    </li>




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payroll" aria-expanded="true"
           aria-controls="payroll">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Payroll</span>
        </a>
        <div id="payroll" class="collapse" aria-labelledby="payroll" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('employee_salary')}}">Salary</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



</ul>
<!-- End of Sidebar -->