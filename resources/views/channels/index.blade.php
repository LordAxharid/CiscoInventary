@extends('layouts.design')
@section('content')<br><br>
<<<<<<< Updated upstream
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
                                        <h1>Channels <span class="table-project-n">Data</span> Table</h1>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <input type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#zoomInDownAddInventary" value="Add New Channel">
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-columns="true" data-show-pagination-switch="true"
                                            data-show-refresh="true" data-key-events="true" data-show-toggle="true"
                                            data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                            data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="nchannel" data-editable="true">Channel</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($channel as $channel)
                                                    <tr>
                                                        <td>{{ $channel->id }}</td>
                                                        <td>{{ $channel->nchannel }}</td>
                                                        <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal"
                                                                data-target="#zoomInDownChannel"> Edit</i><br>
                                                            <i class="far fa-trash-alt iconColorBlue" data-toggle="modal"
                                                                data-target="#DangerModalDelete"> Delete</i></strong>

                                                            @include('channels.modalUpdate')
                                                            @include('channels.modalDelete')
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @include('channels.modalAdd')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
=======
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
                        <h1>Channels <span class="table-project-n">Data</span> Table</h1>
                     </div>
                  </div>
                  <div class="sparkline13-graph">
                     <div class="datatable-dashv1-list custom-datatable-overright">
                        <div id="toolbar">
                           <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#zoomInDownAddInventary" value="Add New Channel">
                        </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                           data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                           <thead>
                              <tr>
                                 <th data-field="id">ID</th>
                                 <th data-field="section" data-editable="true">Section</th>
                                 <th data-field="action">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($channel as $channel)
                              <tr>
                                 <td>{{ $channel->id }}</td>
                                 <td>{{ $channel->nchannel }}</td>
                                 <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal" data-target="#zoomInDownChannel"> Edit</i><br>
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
   <!--  Modal Actualizar Inventario -->
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
                           <div id="zoomInDownChannel" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                   <h3>EDIT CHANNEL</h3>
                                                   <form action="" method="POST">
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Name Of The Channel</label>
                                                               <input type="text" name="position" class="form-control" placeholder="" />
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="login-btn-inner">
                                          <div class="row">
                                             <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                   <button class="btn btn-sm btn-primary login-submit-cs" style="float: left;" type="submit">Update Channel</button>
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
   <!-- Modal Agregar A Channel -->
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
                           <div id="zoomInDownAddInventary" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                   <h3>ADD NEW CHANNEL</h3>
                                                   <form action="" method="POST">
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Name Of The Channel</label>
                                                               <input type="text" name="position" class="form-control" placeholder="" />
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="login-btn-inner">
                                          <div class="row">
                                             <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                   <button class="btn btn-sm btn-primary login-submit-cs" style="float: left;" type="submit">Add Channel</button>
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
   <!-- Modal Eliminar Inventario -->
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
>>>>>>> Stashed changes
