
<footer class="main-footer">
   
  </footer>


<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<!-- Page specific script -->

<script>



$('.alert').click(function(){
  $(this).fadeOut();


});
setTimeout(function(){
$(".alert").fadeOut(300);}
,3000);
$('.alert').hover(function(){
  $(this).css('cursor','pointer');

});
</script>

@section('footerSection')

@show

