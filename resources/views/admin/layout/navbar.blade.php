<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top  shadow" id="qdmin_navbar">

<!-- Topbar Search -->


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline shadow-none">
        <button class="rounded-circle border-0 shadow-none " id="sidebarToggle"><i class="fa fa-bars"></i></button>
    </div>


<!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
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
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter" ></span>
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




        {{--<li class="nav-item no-arrow mx-1">--}}
            {{--<a class="nav-link " href="#"  role="button"--}}
               {{--aria-haspopup="true" aria-expanded="false">--}}
                {{--<i class="fa fa-power-off fa-fw text-danger"></i>Log out--}}
            {{--</a>--}}
        {{--</li>--}}




        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
            </a>


            <!-- Dropdown - Messages -->
            {{--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"--}}
                 {{--aria-labelledby="messagesDropdown">--}}
                {{--<h6 class="dropdown-header">--}}
                    {{--Message Center--}}
                {{--</h6>--}}
                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--<div class="dropdown-list-image mr-3">--}}
                        {{--<img class="rounded-circle" src="{{asset('img/alfred.png')}}" width="60" height="60" alt="">--}}
                        {{--<div class="status-indicator bg-success"></div>--}}
                    {{--</div>--}}
                    {{--<div class="font-weight-bold">--}}
                        {{--<div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been--}}
                            {{--having.</div>--}}
                        {{--<div class="small text-gray-500">Emily Fowler · 58m</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--<div class="dropdown-list-image mr-3">--}}
                        {{--<img class="rounded-circle" src="{{asset('img/alfred.png')}}" width="60" height="60" alt="">--}}
                        {{--<div class="status-indicator"></div>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<div class="text-truncate">I have the photos that you ordered last month, how would you like them--}}
                            {{--sent to you?</div>--}}
                        {{--<div class="small text-gray-500">Jae Chun · 1d</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--<div class="dropdown-list-image mr-3">--}}
                        {{--<img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">--}}
                        {{--<div class="status-indicator bg-warning"></div>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<div class="text-truncate">Last month's report looks great, I am very happy with the progress so--}}
                            {{--far, keep up the good work!</div>--}}
                        {{--<div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item d-flex align-items-center" href="#">--}}
                    {{--<div class="dropdown-list-image mr-3">--}}
                        {{--<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">--}}
                        {{--<div class="status-indicator bg-success"></div>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people--}}
                            {{--say this to all dogs, even if they aren't good...</div>--}}
                        {{--<div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>--}}
            {{--</div>--}}
        </li>



        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                @guest()

                @else
                    <?php $admin=Auth::guard('admin')->user()->photo ?>
                    <span class="mr-2 d-none d-lg-inline text-white small">{{ Auth::guard('admin')->user()->email }}</span>
                    <img class="img-profile rounded-circle" src="{{asset("/upload/staff/images/$admin")}}" width="60" height="60">
                @endguest
            </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="userDropdown" style="border-radius: 0">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark" href="{{ route('adminlogout') }}"
                   onclick="event.preventDefault();
                                document.getElementById('admin_logout_form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                    Logout
                </a>

                <form id="admin_logout_form" action="{{ route('adminlogout') }}" method="post" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->