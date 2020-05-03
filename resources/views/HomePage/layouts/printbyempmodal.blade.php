  <!-- Modal -->
  <div class="modal fade" id="printByEmpReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content" style="text-align: right">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="m-auto float-raight">طباعة تقرير</h3>
            </div>
            <div class="card-body">
                <span id="form_result-print"></span>

                <div class="container">
                    <div class="row" style="text-align: center">
                            <div class="m-auto">

                                <form action="/printbyemp" id="printByEmpForm" method="POST">
                                    @csrf 
                                    <div class="form-group">
                                        <label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">الموظف</label>
                                        <select class="form-control custom-select align-content-end" id="Eemps" name="emp">
                                            <option disabled selected > أختر موظف </option>
                                            @foreach ($employees as $emp)
                                                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-6">
                                            <div id="datepicker5" class="input-group date">
                                                <input id="empdate2" style="text-align: right" class="form-control" name="endDate" type="text" readonly />
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                <label for="date" style="text-align: right" class="ml-2">: إلى</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div id="datepicke6" class="input-group date" style="text-align: right">
                                                <input id="empdate" style="text-align: right" class="form-control" name="startDate" type="text" readonly />
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                <label for="date" style="text-align: right" class="ml-2">: من  </label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                    <div style="text-align: center" class="mt-2"><button  type="submit"   class="btn btn-success">طباعة</button></div>
                                </form>
                            </div>
                    </div>
                   
                   
                </div>
               
            </div>
        </div>
     </div>
 </div>
</div>