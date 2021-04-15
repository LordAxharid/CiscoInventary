@extends('layouts.design')
@section('content')<br><br>
<hr>

<div class="containerTables ">

<div class="center-preloader" id="onload">
<div><img src="{{ asset('img/preloader.gif') }}"></div>
</div>

<div class="all-content-wrapper">
   <div class="data-table-area mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="sparkline13-list">
                  <div class="sparkline13-hd">
                     <div class="main-sparkline13-hd">
                        <h1>Loans <span class="table-project-n">Data</span> Table</h1>
                     </div>
                  </div>
                  <div class="sparkline13-graph">
                     <div class="datatable-dashv1-list custom-datatable-overright">
                      
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                           data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                           <thead>
                              <tr>
                                 <th data-field="loancode" data-editable="true">Loan Code</th>
                                 <th data-field="devicepdr" data-editable="true">Device PDR/PID</th>
                                 <th data-field="serial" data-editable="true">Serial</th>
                                 <th data-field="channel">Channel</th>
                                 <th data-field="loandate" data-editable="true">Loan Date</th>
                                 <th data-field="estimatedreturn" data-editable="true">Estimated Return</th>
                                 <th data-field="realreturn" data-editable="true">Real Return</th>
                                 <th data-field="realstate" data-editable="true">Real State</th>
                                 <th data-field="dayspassed" data-editable="true">Days Passed</th>
                                 <th data-field="observation" data-editable="true">Observation</th>
                                 <th data-field="action">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($loan as $loan)
                              <tr>
                                 <td>{{ $loan->loancode }}</td>
                                 <td>{{ $loan->pdrp_id }}</td>
                                 <td>{{ $loan->serial }}</td>
                                 <td>{{ $loan->channel }}</td>
                                 <td>{{ $loan->dateloan }}</td>
                                 <td>{{ $loan->estimateddate }}</td>
                                 <td>{{ $loan->realreturn }}</td>
                                 <td>{{ $loan->state }}</td>
                                 <td>{{ $loan->pastdays }}</td>
                                 <td>{{ $loan->observation }}</td>
                                 <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal" data-target="#zoomInDownLoan"> Edit</i><br>
                                    <i class="far fa-trash-alt iconColorBlue" data-toggle="modal" data-target="#DangerModalDelete"> Delete</i></strong>
                                 </td>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <!--  Modal Editar Prestamo -->
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
                           <div id="zoomInDownLoan" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                   <h3>CLOSE LOAN OR EDIT LOAN</h3>
                                                   <form action="#">
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Id Loan</label>
                                                               <input type="text" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Devices Borrowed PID</label>
                                                               <input type="text" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Channel</label>
                                                               <div class="form-select-list">
                                                                  <select class="form-control custom-select-value" name="channel">
                                                                     <option>Cisco</option>
                                                                     <option>Claro</option>
                                                                     <option>Prueba1</option>
                                                                     <option>Prueba2</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Loan Date</label>
                                                               <input type="date" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Estimate Return</label>
                                                               <input type="date" class="form-control" placeholder="" />
                                                            </div>
                                                         </div>
                                                         <div class="form-group-inner">
                                                            <div class="row">
                                                               <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                                  <label class="login2">Returned</label>
                                                                  <div class="form-select-list">
                                                                     <select class="form-control custom-select-value" name="channel">
                                                                        <option>NO</option>
                                                                        <option>YES</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                  <label class="login2">State</label>
                                                                  <div class="form-select-list">
                                                                     <select class="form-control custom-select-value" name="channel">
                                                                        <option>Available</option>
                                                                        <option>Taken</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                                  <label class="login2">Serial</label>
                                                                  <input type="text" class="form-control" placeholder="" />
                                                               </div>
                                                               <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                  <label class="login2">Days Passed</label>
                                                                  <input type="text" class="form-control" placeholder="" />
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                </div>
                                                <div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                <label class="login2">Observation</label>
                                                <textarea type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                                </div>                                                                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="login-btn-inner">
                                          <div class="row">
                                         
                                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                          <div class="login-horizental">
                                          <button class="btn btn-primary" type="submit">Update</button>
                                          <button class="btn btn-success" type="submit">Return</button>
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


<!-- Modal Eliminar Prestamo -->
<div class="login-form-area edu-pd mg-b-15">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="DangerModalDelete" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header header-color-modal bg-color-4">
                        <h4 class="modal-title">Delete item from the inventary?</h4>
                        <div class="modal-close-area modal-close-df">
                           <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                     </div>
                     <div class="modal-body">
                        <span class="far fa-trash-alt fa-5x "></span>
                        <h2>Danger!</h2>
                        <p>Are you sure you want to delete the element</p>
                     </div>
                     <div class="modal-footer danger-md">
                        <a data-dismiss="modal" href="#">Cancel</a>
                        <a href="#">Delete</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection