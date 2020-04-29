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
				  <h3 class="m-auto" style="float: right">مكالمة جديده</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form autocomplete="off" class="form-horizontal" action="{{ route('call.store') }}" method="post">
					@csrf
				    <div class="card-body">
						<div class="form-group">
							<label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">الرقم</label>
						  
							<input type="text" value="{{ old('num')}}" style="text-align: right" name="num" class="form-control @error('num') is-invalid @enderror" id="inputEmail3" placeholder="رقم العميل">
						</div>

					

						<div class="form-group">
							<label for="inputEmail5" style="text-align: right" class="col-sm-12 col-form-label">التفاصيل</label>
						  
							<input type="text" value="{{ old('detail')}}" style="text-align: right" name="detail" class="form-control @error('detail') is-invalid @enderror" id="inputEmail5" placeholder="تفاصيل المكالمة">
						</div>

						<div class="form-group">
							<label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">المصدر</label>
							<select class="form-control custom-select align-content-end" name="source">
								<option disabled selected > أختر مصدر </option>
								@foreach ($sources as $source)
									<option style="text-align: center !important; float: right !important" value="{{ $source->id }}">{{ $source->name }}</option>
								@endforeach
							</select>
						</div>


						<div class="form-group">
							<label for="inputStatus" style="text-align: right" class="col-sm-12 col-form-label">الموظف المسؤل</label>
							<select class="form-control custom-select align-content-end" name="emp">
								<option disabled selected > أختر موظف </option>
								@foreach ($employees as $employee)
									<option style="text-align: center !important; float: right !important" value="{{ $employee->id }}">{{ $employee->name }}</option>
								@endforeach
							</select>
						</div>
					  
					 
						
					</div>
					  
					
				
					
				  <!-- /.card-body -->
				  <div class="card-footer">
					  <a href="{{ route('call.index') }}" class="btn btn-warning float-right">رجوع</a>
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