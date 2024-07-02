    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link" href="#" role="button">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">CATEGORY ADMIN PANEL</span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-400 small"><j style="color:black;">{{ Auth::user()->name }}</j></span>
                <img class="img-profile rounded-circle" src="{{ asset('storage/users_profile_photo/' . Auth::user()->profile_photo_path) }}">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="{{ route('categoryadmin.profile') }}" style="color:black;">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-dark-600"></i>
                  Profile
                </a>

                <a class="dropdown-item" href="{{ route('categoryadmin.change-password') }}" style="color:black;">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-dark-600"></i>
                  Change Password
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutmodal" style="color:black;">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark-600"></i>
                  Logout
                </a>
                
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        
              <!--Users Logout Modal-->
              <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Logout</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        
                        <b> {{ Auth::user()->name }}, Are you sure you want to Logout?</b>
                  
                    </div>
                    
                    <div class="modal-footer">
                      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</button>

                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                    
                  </div>
                </div>
              </div><!-- End User Logout Modal-->
              

          
        <!-- Begin Page Content -->
        <div class="container-fluid">