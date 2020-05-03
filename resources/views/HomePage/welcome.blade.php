<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('HomePage.layouts.head')
</head>
{{--  --}}
<body>
    @include('HomePage.layouts.navbar')
<div class="container position-ref full-height">
    {{-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif --}}
  

    <!-- Button trigger modal -->


  @include('HomePage.layouts.addmodal')
  @include('HomePage.layouts.updatemodal')
  @include('HomePage.layouts.printmodal')
  @include('HomePage.layouts.printbystatusmodal')
  @include('HomePage.layouts.printbyempmodal')

    <div class="content" style="padding-top: 100px">
        
        <div class="title m-b-md" style="color: #B3272D">
           PACK & MOVE 
        </div>

        <div class="card">
            <div class="card-header" style="background-color: #a07173;">
                <h3 class="m-auto" style="float: right !important; color: #fdfdfd; font-size: 30px">جميع المكالمات</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="background-color: #d8d0d0;">
                <p style="text-align: center">
                    <button type="button" id="addButton" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus-circle"></i> مكالمة جديدة
                    </button>
                </p>
                <div style="overflow-x:auto;">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead style="text-align: center !important">
                        <tr style="background-color: rgb(160, 156, 156); font-size: 20px">
                            <th>تاريخ الأضافة</th>
                            <th>الموظف المسؤل</th>
                            <th>المصدر</th>
                            <th>الحالة</th>
                            <th>التفاصيل</th>
                            <th>أسم العميل</th>
                            <th>رقم العميل</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
    
                        @foreach ($calls as $call)
                        <tr style="text-align: center !important; font-size: 20px;">
                            <td>{{ $call->created_at }}</td>
                            <td>{{ $call->employee->name }}</td>
                            <td>{{ $call->source->name }}</td>
                            @if ($call->status == null)
                                <td>لم يحدد</td>
                            @else
                                <td>{{ $call->status->name }}</td>
                            @endif
    
                            <td>{{ $call->details }}</td>
    
                            @if ($call->name == null)
                                <td>لم يحدد</td>
                            @else
                                <td>{{ $call->name }}</td>
                            @endif
                            <td><a href="#" class="editmodal" id="{{ $call->id }}" data-toggle="modal" data-target="editModal">{{ $call->phone }}</a></td>
                            <td>{{ $loop->index + 1 }}</td>
                        </tr>
                        @endforeach
    
    
                        </tbody>
                       
                    </table>
                </div>
                
                <button class="btn btn-primary mt-2 mb-4" id="printButton" data-toggle="modal" data-target="#printReport"><i class="fas fa-print mr-1"></i>تقرير بالتاريخ</button>
                <button class="btn btn-warning mr-2 ml-2 mt-2 mb-4" id="printButton" data-toggle="modal" data-target="#printByEmpReport"><i class="fas fa-print mr-1"></i>تقرير للموظف</button>
                <button class="btn btn-danger mt-2 mb-4" id="printButton" data-toggle="modal" data-target="#printByStatusReport"><i class="fas fa-print mr-1"></i>تقرير بالحالة</button>
                
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.box -->

    </div>
</div>


@include('HomePage.layouts.footer')
</body>
</html>
