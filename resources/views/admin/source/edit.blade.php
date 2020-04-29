@extends('admin.layouts.app')

@section('content')
	  <!-- Horizontal Form -->
	  <div class="container">
		  
		  <div class="card card-info">
			@include('includes.messages')
				<div class="card-header">
				  <h3 class="m-auto" style="float: right">تعديل المصدر</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form autocomplete="off" class="form-horizontal" action="{{ route('source.update' , $source->id)}}" method="post">
					@csrf
					@method('patch')

					<div class="card-body">
						<div class="card-body">
							<div class="form-group">
								<label for="inputEmail4" style="text-align: right" class="col-sm-12 col-form-label">الأسم</label>
								<input type="text" value="{{ $source->name }}" style="text-align: right" name="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail4" placeholder="أسم المصدر">
							</div>
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