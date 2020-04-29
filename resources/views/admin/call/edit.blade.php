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
				  <h3 class="m-auto" style="float: right">تعديل المكالمة</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form autocomplete="off" class="form-horizontal" action="{{ route('call.update' , $call->id)}}" method="post">
						@csrf
						@method('patch')
				  <div class="card-body">
					<div class="form-group">
						<label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">الرقم</label>
					  
						<input type="text" value="{{ $call->phone}}" style="text-align: right" name="num" class="form-control @error('num') is-invalid @enderror" id="inputEmail3" placeholder="رقم العميل">
					</div>

					<div class="form-group">
						<label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">الأسم</label>
					  
						<input type="text" value="{{ $call->name}}" style="text-align: right" name="cname" class="form-control @error('cname') is-invalid @enderror" id="inputEmail3" placeholder="أسم العميل">
					</div>

					<div class="form-group">
						<label for="inputEmail5" style="text-align: right" class="col-sm-12 col-form-label">التفاصيل</label>
					  
						<input type="text" value="{{ $call->details}}" style="text-align: right" name="detail" class="form-control @error('detail') is-invalid @enderror" id="inputEmail5" placeholder="تفاصيل المكالمة">
					</div>

					<div class="form-group">
						<label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">الحالة</label>
						<select class="form-control custom-select align-content-end" name="status">
							<option disabled selected > أختر حالة </option>
							@foreach ($statuses as $status)
								<option value="{{ $status->id }}"
								
										@if ($call->status && $status->id ==  $call->status->id)
											selected
										@endif	
									
									
									>{{ $status->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">المصدر</label>
						<select class="form-control custom-select align-content-end" name="source">
							<option disabled selected > أختر مصدر </option>
							@foreach ($sources as $source)
								<option value="{{ $source->id }}"
									@if ($source->id ==  $call->source->id)
									selected
								@endif
									>{{ $source->name }}</option>
							@endforeach
						</select>
					</div>


					<div class="form-group">
						<label for="inputStatus" style="text-align: right" class="col-sm-12 col-form-label">الموظف المسؤل</label>
						<select class="form-control custom-select align-content-end" name="emp">
							<option disabled selected > أختر موظف </option>
							@foreach ($employees as $employee)
								<option value="{{ $employee->id }}"
									@if ($employee->id ==  $call->employee->id)
									selected
								@endif
									>{{ $employee->name }}</option>
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

@endsection