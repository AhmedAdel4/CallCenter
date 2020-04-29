  <!-- Modal -->
  <div class="modal fade" id="printReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content" style="text-align: right">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="m-auto float-raight">طباعة تقرير</h3>
            </div>
            <div class="card-body">
                <form action="/print" method="POST">
                @csrf 
                <div id="datepicker" class="input-group date" style="text-align: right">
                    <input id="date" style="text-align: right" class="form-control" name="startDate" type="text" readonly />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <label for="date" style="text-align: right" class="ml-2">: من  </label>
                </div>
                
                <div id="datepicker2" class="input-group date">
                    <input id="date" style="text-align: right" class="form-control" name="endDate" type="text" readonly />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <label for="date" style="text-align: right" class="ml-2">: إلى</label>
                </div>
                <button type="submit" class="btn btn-success">طباعة</button>
            </form>
            </div>
        </div>
     </div>
 </div>
</div>