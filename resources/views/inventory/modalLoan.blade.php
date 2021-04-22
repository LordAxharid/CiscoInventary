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
                        <div id="zoomInDownLoan{{ $inventory->id }}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                <h3>Lend Device</h3>
                                                <form action="{{ url('/Inventory/UpdAddLoan/'.$inventory->id) }}" method="POST">
                                                   {{ csrf_field() }}
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12" hidden>
                                                            <label class="login2">Id Inv</label>
                                                            <input type="text" class="form-control" name="idInv" id="idInv" value="{{ $inventory->id }}"/>
                                                         </div>
                                                         <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Id Loan</label>
                                                            <input type="text" class="form-control" name="idloan" id="idloan" />
                                                         </div>
                                                         <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Devices Borrowed PID</label>
                                                            <input type="text" class="form-control" name="pdrpid" id="pdrpid" value="{{ $inventory->pdrpid }}" readonly/>
                                                         </div>
                                                         <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Channel</label>
                                                            <div class="form-select-list">
                                                               <select class="form-control custom-select-value" name="channel">
                                                                  @foreach ( $channels as $channels )
                                                                  <option value="{{$channels->id}}"> {{$channels->nchannel}} </option>
                                                                  @endforeach
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Loan Date</label>
                                                            <input type="date" class="form-control" name="dateloan" id="dateloan"/>
                                                         </div>
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Estimate Return</label>
                                                            <input type="date" class="form-control" name="estimateddate" id="estimateddate" />
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Returned</label>
                                                               <div class="form-select-list">
                                                                  <select class="form-control custom-select-value" name="return" readonly>
                                                                     <option>YES</option>
                                                                     <option>No</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">State</label>
                                                               <div class="form-select-list">
                                                                  <select class="form-control custom-select-value" name="state" id="state" readonly>
                                                                     <option value="available">Available</option>
                                                                     <option value="taken">Taken</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Serial</label>
                                                               <input type="text" class="form-control" name="serial" id="serial" value="{{ $inventory->serial }}" readonly/>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                             </div>
                                             <div class="form-group-inner">
                                             <div class="row">
                                             <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                             <label class="login2">Observation</label>
                                             <textarea type="text" class="form-control" name="observation" id="observation"></textarea>
                                             </div>
                                             </div>                                                                                   
                                             </div>
                                          </div>
                                       </div>
                                       <div class="login-btn-inner">
                                       <div class="row">
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                       <div class="login-horizental">
                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Data</button>
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