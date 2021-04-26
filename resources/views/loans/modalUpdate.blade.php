<div class="basic-form-area mg-b-15">
   <div class="container-fluid">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <div class="sparkline11-list responsive-mg-b-30">
            <div class="sparkline11-hd">
            </div>
            <div class="sparkline11-graph">
               <div class="basic-login-form-ad">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="zoomInDownLoanyUpd{{$loan->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                 </div>
                                 <div class="modal-body">
                                    <div class="modal-login-form-inner">
                                       <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                             <div class="basic-login-inner modal-basic-inner">
                                          
                                                <h3>UPDATE DEVICE</h3>
                                                <form  action="{{ url('Loan/EditLoan/'.$loan->id) }}" method="POST">
                                                   {{ csrf_field() }}
                                                 
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                        
                                                         
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                         <label class="login2">Id Loan</label>
                                                            <input type="text" class="form-control" name="" id=""  value="{{ $loan->loancode }}" >
                                                         </div>

                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                         <label class="login2">Borrowed Device PID</label>
                                                            <input type="text" class="form-control" name="" id=""  value="{{ $loan->pdrp_id }}" readonly>
                                                         </div>

                                                         
                                                       
                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">

                                                      <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                         <label class="login2">Channel</label>
                                                            <input type="text" class="form-control" name="" id=""  value="{{ $loan->nchannel }}" readonly>
                                                         </div>
                                                         
                                                         <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Loan Date</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="{{ $loan->dateloan }}" readonly/>
                                                         </div>

                                                         <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Estimated Return</label>
                                                            <input type="date" class="form-control" name="serial" id="serial" value="{{ $loan->estimateddate }}" />
                                                         </div>


                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">

                                                      
                                                      <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Real Return</label>
                                                            <input type="date" class="form-control" name="serial" id="serial" value="{{ $loan->serial }}" />
                                                         </div>
                                                        
                                                      <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Returned</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="{{ $loan->state }}" readonly/>
                                                         </div>

                                                        

                                                   </div>

                                                   <div class="row">
                                                   <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Real State</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="No" readonly/>
                                                         </div>

                                                         <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Serial</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="{{ $loan->serial }}" readonly/>
                                                         </div>

                                                         <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Days Passed</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="{{ $loan->pastdays }}" readonly/>
                                                         </div>

                                                   </div>
                                                   
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Observation</label>
                                                            <textarea type="text" class="form-control" name="observation" id="observation" value="">{{ $loan->observation }}</textarea>
                                                         </div>
                                                      </div>
                                                   </div>
                                           
                                                   <div class="login-btn-inner">
                                                      <div class="row">
                                                         <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="login-horizental botones-Update-Loan">
                                                               <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                                               <button class="btn btn-lg btn-success " type="submit">Return</button>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>