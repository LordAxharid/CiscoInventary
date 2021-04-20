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
                                 <div id="zoomInDownAddInventary" class="modal modal-edu-general modal-zoomInDown fade"
                                     role="dialog">
                                     <div class="modal-dialog">
                                         <div class="modal-content">
                                             <div class="modal-close-area modal-close-df">
                                                 <a class="close" data-dismiss="modal" href="#"><i
                                                         class="fa fa-close"></i></a>
                                             </div>
                                             <div class="modal-body">
                                                 <div class="modal-login-form-inner">
                                                     <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                             <div class="basic-login-inner modal-basic-inner">
                                                                 <h3>ADD NEW CHANNEL</h3>
                                                                 <form action="{{ route('Channel.store') }}"
                                                                     method="POST">
                                                                     {{ csrf_field() }}
                                                                     <div class="form-group-inner">
                                                                         <div class="row">
                                                                             <div
                                                                                 class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                                                 <label class="login2">Name Of
                                                                                     The Channel</label>
                                                                                 <input type="text" name="nchannel"
                                                                                     class="form-control"
                                                                                     placeholder="Name channel" />
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="login-btn-inner">
                                                                         <div class="row">
                                                                             <div
                                                                                 class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                 <div class="login-horizental">
                                                                                     <button
                                                                                         class="btn btn-sm btn-primary login-submit-cs"
                                                                                         style="float: left;"
                                                                                         type="submit">Add
                                                                                         Channel</button>
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
