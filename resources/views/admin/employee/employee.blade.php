@extends('admin.layouts.app')
@section('headSection')
	<style>
		select{
			text-align: center;
			float: right;
			direction: rtl;
		}
	</style>
@endsection
@section('content')
	  <!-- Horizontal Form -->
	  <div class="container">
		  
		  <div class="card card-info">
			@include('includes.messages')
				<div class="card-header">
				  <h3 class="m-auto" style="float: right">موظف جديد</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form autocomplete="off" class="form-horizontal" action="{{ route('employee.store') }}" method="post">
					@csrf
				    <div class="card-body">


						<div class="form-group">
							<label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">الأسم</label>
						  
							<input type="text" value="{{ old('name')}}" style="text-align: right;" name="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail4" placeholder="أسم الموظف">
						</div>

						<div class="form-group">
							<label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">الرقم السرى</label>
						  
							<input type="password" autocomplete = 'new-password' value="{{ old('password')}}" style="text-align: right" name="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail4" placeholder="الرقم السرى">
						</div>

						<div class="form-group">
							<label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">رقم الهاتف</label>
						  
							<input type="text" value="{{ old('phone')}}" style="text-align: right" name="phone" class="form-control @error('phone') is-invalid @enderror" id="inputEmail4" placeholder="رقم الهاتف">
						</div>

						<div class="form-group">
							<label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">البريد الألكترونى</label>
						  
							<input type="email" value="{{ old('email')}}" style="text-align: right" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="البريد الألكترونى">
						</div>
					 
						
					</div>
					  
					
				
					
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <a href="{{ route('source.index') }}" class="btn btn-warning float-right">رجوع</a>
					<button type="submit" class="btn btn-info">حفظ</button>
				  </div>
				  <!-- /.card-footer -->
				</form>
			  </div>
			  <!-- /.card -->
	  </div>
@endsection

@section('footerSection')


<!-- bs-custom-file-input -->
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>


@endsection