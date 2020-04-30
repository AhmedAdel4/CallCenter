<!DOCTYPE html>
<html lang="en" dir=”rtl”>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print data as PDF</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        body{
            font-family: "XB Riyaz";
        }
        .title {
        font-size: 84px;
        color: #CEF0D4; font-family: 'Rouge Script', cursive; ; text-shadow: 1px 1px 2px #082b34;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>
<body dir=”rtl” >
    {{-- <img height="50px" width="50px" src="/New2014-LogoEnglish.jpg" alt=""> --}}
    

     @if ($results)
     <div style="overflow-x:auto;">
        <table id="example2" class="table table-bordered table-hover">
            <thead align='center'>
            <tr dir=”rtl” style="background-color: rgb(160, 156, 156); font-size: 20px">
                <th dir=”rtl”>تاريخ الأضافة</th>
                <th dir=”rtl”>الموظف المسؤل</th>
                <th dir=”rtl”>المصدر</th>
                <th dir=”rtl”>الحالة</th>
                <th dir=”rtl”>التفاصيل</th>
                <th dir=”rtl”>أسم العميل</th>
                <th dir=”rtl”>رقم العميل</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($results as $result)
            <tr align='center' style="font-size: 20px;">
                <td align='center'>{{ $result->created_at }}</td>
                <td align='center'>{{ $result->employee->name }}</td>
                <td align='center'>{{ $result->source->name }}</td>
                @if ($result->status == null)
                <td align='center'>لم يحدد</td>
                @else
                <td align='center'>{{ $result->status->name }}</td>
                @endif
                <td align='center'>{{ $result->details }}</td>
                @if ($result->name == null)
                <td align='center'>لم يحدد</td>
                @else
                <td align='center'>{{ $result->name }}</td>
                @endif
                <td align='center'>{{ $result->phone }}</td>
                <td align='center'>{{ $loop->index + 1 }}</td>
            </tr>
            @endforeach


            </tbody>
           
        </table>
    </div>
         
     @endif
    
</body>
</html>