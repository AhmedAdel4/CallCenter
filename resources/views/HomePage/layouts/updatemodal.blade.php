   <!-- Modal -->
   <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content" style="text-align: right">
          <div class="card card-info">
              <div class="card-header">
                  <h3 class="m-auto float-raight">تعديل المكالمة</h3>
              </div>
              <span id="form_result-update"></span>
              <form id="editFormID" class="form-horizontal" method="POST">
                  @csrf
                  <input type="hidden" name="id" id="id">
                  <div class="card-body">
                      <div class="form-group">
                          <label for="Ephone" style="text-align: right" class="col-sm-12 col-form-label">الرقم</label>
                        
                          <input type="text" style="text-align: right" id="Ephone" name="phone" disabled class="form-control"  placeholder="رقم العميل">
                      </div>
  
                      <div class="form-group">
                          <label for="Ename" style="text-align: right" class="col-sm-12 col-form-label">الأسم</label>
                          <input type="text"  style="text-align: right" id="Ename" name="cname" class="form-control"  placeholder="أسم العميل">
                      </div>
  
                      <div class="form-group">
                          <label for="Edetails" style="text-align: right" class="col-sm-12 col-form-label">التفاصيل</label>
                        
                          <input type="text" id="Edetails"  style="text-align: right" name="detail" class="form-control"  placeholder="تفاصيل المكالمة">
                      </div>
  
                      <div class="form-group">
                          <label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">الحالة</label>
                          <select class="form-control custom-select align-content-end" id="Estatus" name="status">
                              <option disabled selected > أختر حالة </option>
                              @foreach ($statuses as $status)
                                  <option value="{{ $status->name }}">{{ $status->name }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">المصدر</label>
                          <select class="form-control custom-select align-content-end" id="Esource" name="source" disabled>
                              <option disabled selected > أختر مصدر </option>
                              @foreach ($sources as $source)
                                  <option value="{{ $source->name }}">{{ $source->name }}</option>
                              @endforeach
                          </select>
                      </div>
  
                  </div>
                  <div class="float-right">
                      <button class="btn btn-secondary mr-2" data-dismiss="modal" type="button" >
                          رجوع
                      </button>
                      <button id="update" type="submit" class="btn btn-primary mr-2">
                          تعديل 
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
 </div>

  