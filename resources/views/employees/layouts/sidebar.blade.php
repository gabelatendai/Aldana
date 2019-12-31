<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('employee_dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img class="img-profile rounded-circle" src="{{asset('img/logo_raster.jpg')}}" width="60" height="60">
        </div>
        <div class="sidebar-brand-text mx-3">HRM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('employee_dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#account" aria-expanded="true"
           aria-controls="account">
            <i class="fas fa-fw fa-user"></i>
            <span>Account</span>
        </a>
        <div id="account" class="collapse" aria-labelledby="account" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('employee-change-password')}}">Change Password</a>
                <a class="collapse-item" href="{{route('show_details')}}">See your Details</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#leave" aria-expanded="true"
           aria-controls="leave">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Leave</span>
        </a>
        <div id="leave" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('employee_show_leaves')}}">Leave Information</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#announcements" aria-expanded="true"
           aria-controls="announcements">
            <i class="fas fa-fw fa-lightbulb"></i>
            <span>Announcements</span>
        </a>
        <div id="announcements" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('manage_messages')}}">Manage</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


</ul>
<!-- End of Sidebar -->