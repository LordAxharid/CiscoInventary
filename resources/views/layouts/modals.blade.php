<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <!--start modal-->
<!-- modal -->
<!-------------------------------------------Edit Modal Inventary----------------------------------------->
<!--<div id="PrimaryModalalert1" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title"> Edith The Inventary</h5>
           </div>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <form  id="addform">
                     {{ csrf_field() }}
                    <div class="form-group-inner">
                       <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label class="usr">Section</label>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                             <input type="text" class="form-control" id="section" name="section" placeholder="Enter Section" />
                          </div>
                       </div>
                       <input type="hidden" id="inventary_id" name="inventary_id">
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Position</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="position" name="position" placeholder="Position Ej:A1" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label for="sel1">State :</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="state" name="state" placeholder="Availability" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Product</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="product" name="product" placeholder="Product" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">PDR/Id</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="pdrpid" name="pdrpid" placeholder="Ej: CP-79.." />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Serial</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">code</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="code" name="code" placeholder="Code" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Channel</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" id="channel" name="channel" placeholder="Channel ej. 75" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="comment">Observations</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <textarea class="form-control" id="observation" name="observation" rows="5" id="comment"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <a data-dismiss="modal" href="#">Cancel</a>
                        <button type="submit" class="btn btn-info">Update data</button>
                    </div>
                 </form>
            </div>
 
            
        </div>
    </div>
 </div>-->
 <!-------------------------------------------Insert Modal Inventary----------------------------------------->
 <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Insert The Inventary</h5>
            </div>
             <div class="modal-close-area modal-close-df">
                 <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
             </div>
             <div class="modal-body">
                 <form id="addform">
                      {{ csrf_field() }}
                     <div class="form-group-inner">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <label class="usr">Section</label>
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control" name="section" placeholder="Enter Section" />
                           </div>
                        </div>
                     </div>
                     <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">Position</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="position" placeholder="Position Ej:A1" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                             <label for="sel1">State :</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="state" placeholder="Availability" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">Product</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="product" placeholder="Product" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">PDR/Id</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="pdrpid" placeholder="Ej: CP-79.." />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">Serial</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="serial" placeholder="Serial" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">code</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="code" placeholder="Code" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="usr">Channel</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                               <input type="text" class="form-control" name="channel" placeholder="Channel ej. 75" />
                            </div>
                         </div>
                      </div>
                      <div class="form-group-inner">
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               <label class="comment">Observations</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                             <textarea class="form-control" name="observation" rows="5" id="comment"></textarea>
                            </div>
                         </div>
                      </div>
                      <div class="modal-footer">
                         <a data-dismiss="modal" href="#">Cancel</a>
                         <button type="submit" class="btn btn-succes btnenviar">Save data</button>
                     </div>
                  </form>
             </div>
 
             
         </div>
     </div>
 </div>
 <!-------------------------------------------Delete Modal Inventary----------------------------------------->
 <div id="PrimaryModalalert2" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
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

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js')}}" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js')}}" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 
    <script type="text/javascript">
        $(document).ready(function (){

            $('.btnenviar').click('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/Inventaryadd",
                    data: $('#addform').serialize(),
                    success: function (response) {
                        console.log(response)
                        $('#PrimaryModalalert').modal('hide')
                        alert("Data Saved");
                    },
                    error: function(error) {
                        console.log(error)
                        alert("Data Not Saved");
                    }
                });
            });
        });
    </script>
 <!--end modal-->
 
</body>
</html>
