@extends('layouts.design')

@section('content')
 <!-- Static Table Start -->
 
<div class="all-content-wrapper">
 <div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                       <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <br><div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="false">Section</th>
                                        <th data-field="email" data-editable="false">Position</th>
                                        <th data-field="phone" data-editable="false">State</th>
                                        <th data-field="date" data-editable="false">Product</th>
                                        <th data-field="price" data-editable="false">PdrPid</th>
                                        <th data-field="serial" data-editable="false">Serial</th>
                                        <th data-field="code" data-editable="false">Code</th>
                                        <th data-field="channel" data-editable="false">Channel</th>
                                        <th data-field="observations" data-editable="false">Observations</th>
                                        <th data-field="actions" data-editable="false">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inventary as $inventary)
                                    <tr>
                                        <td></td>
                                        <td>{{ $inventary->id }}</td>
                                        <td>{{ $inventary->section }}</td>
                                        <td>{{ $inventary-> position }}</td>
                                        <td>{{ $inventary->state }}</td>
                                        <td>{{ $inventary->product }}</td>
                                        <td>{{ $inventary->pdrpid }}</td>
                                        <td>{{ $inventary->serial }}</td>
                                        <td>{{ $inventary->code }}</td>
                                        <td>{{ $inventary->channel }}</td>
                                        <td>{{ $inventary->observation }}</td>
                                        <td>   
                                            <a class="fas fa-folder-plus"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert"></a>   
                                            <a class="far fa-edit"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert"></a>
                                            <a class="far fa-trash-alt"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert1"></a>
                                            
                                       </td>
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

<!-- modal -->

<div class="sparkline11-graph">
   <div class="basic-login-form-ad">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                     </div>
                     <div class="modal-body">
                        <div class="modal-login-form-inner">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="login-social-inner">
                                    <a href="#" class="button btn-social facebook span-left"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
                                    <a href="#" class="button btn-social twitter span-left"> <span><i class="fa fa-twitter"></i></span> Twitter </a>
                                    <a href="#" class="button btn-social googleplus span-left"> <span><i class="fa fa-google-plus"></i></span> Google+ </a>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="basic-login-inner modal-basic-inner">
                                    <h3>Sign In</h3>
                                    <p>Register User can get sign in from here</p>
                                    <form action="#">
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Email</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="email" class="form-control" placeholder="Enter Email" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Password</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="password" class="form-control" placeholder="password" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="login-btn-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <label>
                                                <input type="checkbox" class="i-checks"> Remember me </label>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                   <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Sign In</button>
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

<div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group-inner">
                       <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label class="usr">Section</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                             <input type="text" class="form-control" placeholder="Enter Section" />
                          </div>
                       </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Position</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="password" class="form-control" placeholder="Position Ej:A1" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="sel1">Select list:</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <select class="form-control" id="sel1">
                                <option>Enable</option>
                                <option>Unable</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Product</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" placeholder="Product" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">PDR/Id</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" placeholder="Ej: CP-79.." />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Serial</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" placeholder="Serial" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="comment">Observations</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                           </div>
                        </div>
                     </div>
                 </form>
            </div>

            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#">Process</a>
            </div>
        </div>
    </div>
</div>

<div id="PrimaryModalalert1" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <i class="far fa-trash-alt fa-5x"  style="color: #009bdd;"></i>
                <h2>Are you sure?</h2>
                <h3>What do you want to delete?</h3>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <a href="#">Accept</a>
            </div>
        </div>
    </div>
</div>

@endsection