<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="/dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <main class="py-4">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Move & Pack Dashboard</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">قم بتسجيل الدخول</p>
          
          <form action="{{ route('admin.login.submit') }}" method="post">
            @csrf
            @include('includes.messages')
              <div class="input-group mb-3">
                <input type="text" style="text-align: center"  name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="User Email"  autocomplete="email" autofocus>
            </div>
              <div class="input-group mb-3">
                <input id="password" style="text-align: center" type="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password"> 
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">تسجيل</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
  
            
            
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  <!-- /.login-box -->
  </main>

 <!-- jQuery -->
 <script src="/plugins/jquery/jquery.min.js "></script>
 <!-- Bootstrap 4 -->
 <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
 <!-- AdminLTE App -->
 <script src="/dist/js/adminlte.min.js "></script>
</body>
</html>