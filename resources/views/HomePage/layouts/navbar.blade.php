<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #545759">
  <div class="container">
    <span >
          <img height="50px" width="50px" src="/New2014-LogoEnglish.jpg" alt="">
        </span>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <div class="mb-3 mr-3 ml-3 mt-1" style="color: seashell" >
            <h3 style="font-weight: 20px">
              {{ Auth::user()->name }}
            </h3>
          </div>
        </li>
        <li class="nav-item active">
          <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); 
          document.getElementById('logout-form').submit();">
          {{ __('تسجيل الخروج') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
  </div>
</nav>