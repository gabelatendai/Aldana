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
                






            </div>
        </li>




        
            
               
                
            
        




        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
            </a>


            <!-- Dropdown - Messages -->
            
                 
                
                    
                
                
                    
                        
                        
                    
                    
                        
                            
                        
                    
                
                
                    
                        
                        
                    
                    
                        
                            
                        
                    
                
                
                    
                        
                        
                    
                    
                        
                            
                        
                    
                
                
                    
                        
                        
                    
                    
                        
                            
                        
                    
                
                
            
        </li>



        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>
                    <?php $admin=Auth::guard('admin')->user()->photo ?>
                    <span class="mr-2 d-none d-lg-inline text-white small"><?php echo e(Auth::guard('admin')->user()->email); ?></span>
                    <img class="img-profile rounded-circle" src="<?php echo e(asset("/upload/staff/images/$admin")); ?>" width="60" height="60">
                <?php endif; ?>
            </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="userDropdown" style="border-radius: 0">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark" href="<?php echo e(route('adminlogout')); ?>"
                   onclick="event.preventDefault();
                                document.getElementById('admin_logout_form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                    Logout
                </a>

                <form id="admin_logout_form" action="<?php echo e(route('adminlogout')); ?>" method="post" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->