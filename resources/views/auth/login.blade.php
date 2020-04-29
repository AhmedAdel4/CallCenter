<!DOCTYPE html>
<html>
<head>
	<title>تسجيل الدخول</title>
	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="/dist/css/styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

	

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h3 class="m-4">تسجيل الدخول</h3>
    @include('includes.messages')

    <!-- Login Form -->
    <form autocomplete="off" action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" id="login" name="email" value="{{ old('email') }}" class="fadeIn first @error('email') is-invalid @enderror" placeholder="أسم المستخدم"  autocomplete="email" autofocus>
       
        <input id="password" autocomplete = 'new-password' type="password"  class="fadeIn second @error('password') is-invalid @enderror" name="password"  placeholder="الرقم السرى">
       
        <input type="submit" class="fadeIn third" value="تسجيل">
    </form>

  </div>
</div>

</body>
</html>