 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
         
          
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item d-none d-sm-inline-block" >
            <a class="btn btn-primary" href="{{ route('admin.logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          تسجيل الخروج
                      </a>

                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
          </li>
        </ul>
    
      
    
        <!-- Right navbar links -->
        
      </nav>
      <!-- /.navbar -->