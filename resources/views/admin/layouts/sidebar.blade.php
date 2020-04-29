 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4 float-left" style="text-align: left !important">
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            
            <div class="info">
              
            <a href="/" ><h2 class="d-block text-cyan" style="text-align: center"> <i> <img src="/call-center-worker-with-headset.png"
              style="opacity: .8"></i> Call Center</h2></a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
           
                
                <li class="nav-item">
                <a href="{{ route('call.index') }}" class="nav-link">
                  <i class="fa fa-phone nav-icon"></i>
                  <p>المكالمات</p>
                </a>
                </li>
               
                <li class="nav-item">
                  <a href="{{ route('status.index') }}" class="nav-link">
                    <i class="fa fa-info nav-icon"></i>
                    <p>الحالة</p>
                  </a>
                  </li>
            
                  <li class="nav-item">
                    <a href="{{ route('source.index') }}" class="nav-link">
                      <i class="fab fa-sourcetree nav-icon"></i>
                      <p>المصدر</p>
                    </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ route('employee.index') }}" class="nav-link">
                        <i class="fas fa-user-tie nav-icon"></i>
                        <p>الموظفين</p>
                      </a>
                      </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>