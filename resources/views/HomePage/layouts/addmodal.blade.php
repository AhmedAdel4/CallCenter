  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content" style="text-align: right">
         <div class="card card-info">
             <div class="card-header">
                 <h3 class="m-auto float-raight">أدخل مكالمة جديدة</h3>
             </div>
             <span id="form_result"></span>
             <form id="addCall" class="form-horizontal" method="post">
                 @csrf
                 <div class="card-body">
                     <div class="form-group">
                         <label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">الرقم</label>
                       
                         <input type="text" style="text-align: right" name="phone" class="form-control " placeholder="رقم العميل">
                     </div>
 
                     <div class="form-group">
                         <label for="inputEmail3" style="text-align: right" class="col-sm-12 col-form-label">الأسم</label>
                       
                         <input type="text"  style="text-align: right" name="cname" class="form-control " placeholder="أسم العميل">
                     </div>
 
                     <div class="form-group">
                         <label for="inputEmail5" style="text-align: right" class="col-sm-12 col-form-label">التفاصيل</label>
                       
                         <input type="text"  style="text-align: right" name="detail" class="form-control" placeholder="تفاصيل المكالمة">
                     </div>
 
                     <div class="form-group">
                         <label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">الحالة</label>
                         <select class="form-control custom-select align-content-end" name="status">
                             <option disabled selected > أختر حالة </option>
                             @foreach ($statuses as $status)
                                 <option value="{{ $status->id }}">{{ $status->name }}</option>
                             @endforeach
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="inputStatus1" style="text-align: right" class="col-sm-12 col-form-label">المصدر</label>
                         <select class="form-control custom-select align-content-end" name="source">
                             <option disabled selected > أختر مصدر </option>
                             @foreach ($sources as $source)
                                 <option value="{{ $source->id }}">{{ $source->name }}</option>
                             @endforeach
                         </select>
                     </div>
 
                 </div>
                 <div class="float-right">
                     <button class="btn btn-secondary mr-2" data-dismiss="modal" type="button" >
                         رجوع
                     </button>
                     <button id="submit" type="submit" class="btn btn-primary mr-2">
                         حفظ المكالمة
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>