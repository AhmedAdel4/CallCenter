@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <p class="alert alert-danger alert-dismissible fade show" style="text-align: center">{{ $error }}</p>
  @endforeach
@endif


@if (session()->has('success'))
	<p class="alert alert-success alert-dismissible fade show" style="text-align: center" >{{ session('success') }}</p>
@endif


