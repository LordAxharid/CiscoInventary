<div class="login-form-area edu-pd mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<<<<<<< Updated upstream
               <div id="DangerModalDelete{{$inventory->id}}" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
=======
               <div id="DangerModalDelete" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
>>>>>>> Stashed changes
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-4">
                           <h4 class="modal-title">Delete item from the inventary?</h4>
                           <div class="modal-close-area modal-close-df">
<<<<<<< Updated upstream
                              <a class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                           </div>
                        </div>
                        <form action="{{ url('Inventory/'.$inventory->id) }}" method="POST">
                           {{ csrf_field() }}
                           {{ method_field('DELETE') }}
                           <div class="modal-body">
                              <span class="far fa-trash-alt fa-5x "></span>
                              <h2>Danger!</h2>
                              <p>Are you sure you want to delete the element</p>
                           </div>
                           <div class="modal-footer danger-md">
                              
                              <button class="btn btn-bg btn-danger" type="submit">Delete data</button>
                           </div>
                     </form>
=======
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
>>>>>>> Stashed changes
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>