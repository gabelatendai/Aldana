<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-gradient-dark topbar mb-4 static-top  shadow" id="qdmin_navbar">

    <!-- Topbar Search -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline shadow-none">
        <button class="rounded-circle border-0 shadow-none " id="sidebarToggle"><i class="fa fa-bars"></i></button>
    </div>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                 aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">


            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Announcements<i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter" id="unread_notification_count"></span>
            </a>


            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header border-0" style="border-radius: 0">
                    Alerts Center
                </h6>


                <div class="" id="unread_notification_list">


                </div>
                {{--<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>--}}



            </div>
        </li>

        <!-- Nav Item - Messages -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                @guest()

                @else
                <?php $employee=Auth::guard('web')->user()->profile_photo ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::guard('web')->user()->email }}</span>
                <img class="img-profile rounded-circle" src="{{asset("/upload/employees/images/$employee")}}" width="60" height="60">
                @endguest
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('show_details')}}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="{{route('employee-change-password')}}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                document.getElementById('admin_logout_form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>

                <form id="admin_logout_form" action="{{ route('logout') }}" method="post" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->