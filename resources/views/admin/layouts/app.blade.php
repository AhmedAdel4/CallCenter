<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')
    
    <div class="content-wrapper">
        @include('admin.layouts.header')
      @yield('content')
    </div>
    @include('admin.layouts.footer')
    
   
    </div>
</body>
</html>
