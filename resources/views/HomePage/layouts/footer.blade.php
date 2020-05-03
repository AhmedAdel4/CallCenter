<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Page specific script -->

<script>


    $('.alert').click(function () {
        $(this).fadeOut();


    });
    setTimeout(function () {
            $(".alert").fadeOut(300);
        }
        , 3000);
    $('.alert').hover(function () {
        $(this).css('cursor', 'pointer');

    });
    $(function () {
        $("#datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true,
                format: 'yyyy-mm-dd'
        }).datepicker('update', new Date());
    });
    $(function () {
        $("#datepicker2").datepicker({ 
                autoclose: true, 
                todayHighlight: true,
                format: 'yyyy-mm-dd'
        }).datepicker('update', new Date());
    });

</script>
{{-- Add Call Script --}}
<script>
    $(document).ready(function(){
        $('#addButton').click(function(){
             $('#addCall')[0].reset();
             $('#form_result').html('');
        });
        $(document).on('click', "#submit", function(e) {
                e.preventDefault();

                $.ajax({  
                    url: "{{ route('home') }}",
                    type: "post",  
                    data: $('#addCall').serialize(),
                    success: function(data) {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div>';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p class="alert alert-danger alert-dismissible fade show" style="text-align: center">' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                            $('#form_result').html(html);
                        }else
                        {
                            html = '<div class="alert alert-success">' + 'تم الحفظ بنجاح' + '</div>';
                            $('#addCall')[0].reset();
                            $('#form_result').html(html);
                            location.reload(true);
                        }
                        
                    }
                });
        });

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
    });
</script>

{{-- edit call script --}}
<script>
    $(document).ready(function(){
        var id;
        $('.editmodal').on('click' ,function(){
            $('#form_result-update').html('');
            $('#editFormID')[0].reset();
            $('#editModal').modal('show');
            id = $(this).closest('a').attr('id');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            if(data[5] != "لم يحدد" ){
                $("#Ename").val(data[5]);
            }
            $("#Ephone").val(data[6]);
            $("#Edetails").val(data[4]);
            $("#Esource").val(data[2]);
            if(data[3] != "لم يحدد")
            {
                $("#Estatus").val(data[3]);
            }
                
            
        });
        $('#editFormID').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "/callUpdate/"+id,
            data: $('#editFormID').serialize(),
            success: function(result){
                var html = '';
                if(result.errors)
                {
                    html = '<div>';
                    for(var count = 0; count < result.errors.length; count++)
                    {
                        html += '<p class="alert alert-danger alert-dismissible fade show" style="text-align: center">' + result.errors[count] + '</p>';
                    }
                    html += '</div>';
                    $('#form_result-update').html(html);
                }else
                {
                    html = '<div class="alert alert-success">' + 'تم الحفظ بنجاح' + '</div>';
                    $('#editFormID')[0].reset();
                    $('#form_result-update').html(html);
                    location.reload(true);
                }
            },
        });
    });

    });
   

</script>
{{-- Print Script --}}
<script>
    $(document).ready(function(){
        
        $('#printButton').on('click' ,function(){
            $('#form_result-print').html('');    
        });
        function downloadFile(response) {
            var blob = new Blob([response], {type: 'application/pdf'})
            var url = URL.createObjectURL(blob);
            location.assign(url);
        } 
        $('#printForm').on('submit',function(e){
            $('#form_result-print').html('');
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "/print",
                data: $('#printForm').serialize(),
                success: function(result){
                    var html = '';
                    if(result.errors)
                    {
                        html = '<div>';
                        
                        html += '<p class="alert alert-danger alert-dismissible fade show" style="text-align: center">' + result.errors + '</p>';
                        
                        html += '</div>';
                        $('#form_result-print').html(html);
                    }
                    else
                    {
                        this.downloadFile(result);
                    }

                },
            });
        });
    });

</script>
