@extends('admin.layouts.app')
@section('headSection')
   <!-- DataTables -->
   <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

@endsection
@section('content')
  <!-- Main content -->	   
  <div class="card" >
    <div class="card-header">
      <h3 class="m-auto text-dark" style="float: right !important">جميع المكالمات</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @include('includes.messages')

        <p style="text-align: center"><a  class='col-lg-offset-5 btn btn-success' href="{{ route('call.create') }}"> <i class="fa fa-plus-circle"></i> أضف مكالمه</a></p>

      <table id="example2" class="table table-bordered table-hover">
        <thead  style="text-align: center !important">
        <tr>
          <th>مسح</th>
          <th>تعديل</th>
          <th>الموظف</th>
          <th>الحالة</th>
          <th>المصدر</th>
          <th>التفاصبل</th>
          <th>رقم العميل</th>
          <th>#</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($calls as $call)
          <tr  style="text-align: center !important">
            <td>
              <form id="delete-form-{{ $call->id }}" method="post" action="{{ route('call.destroy',$call->id) }}" >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}	
              </form>
              <a href="" class="btn btn-danger" onclick="
              if(confirm('هل تريد حذف العنصر ؟'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $call->id }}').submit();
                  }
                  else{
                    event.preventDefault();
                  }" ><span class="glyphicon glyphicon-trash"></span>حذف</a>
            </td>
            <td><a class="btn btn-info"  href="{{ route('call.edit',$call->id) }}">تعديل<span class="glyphicon glyphicon-edit"></span></a></td>
            <th>{{ $call->employee->name }}</th>
            @if ($call->status)
            <th>{{ $call->status->name }}</th>
            @else
            <th>لم يحدد</th>
            @endif
            
            <th>{{ $call->source->name }}</th>
            <th>{{ $call->details }}</th>
            <th>{{ $call->phone }}</th>
            <td>{{ $loop->index + 1 }}</td>
          </tr>
        @endforeach
         
        </tbody>
      
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- /.box -->

	        







@endsection

@section('footerSection')


<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "autoWidth": true,
                "language": {
                    "zeroRecords": "لا توجد بيانات",
                    "search": "بحث",
                    "loadingRecords": "من فضلك انتظر - جارى التحميل...",
                    "paginate": {
                        "next": "التالى",
                        "previous": "السابق",
                    }
                }

            });
  });
</script>
@endsection