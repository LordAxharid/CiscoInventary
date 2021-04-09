@extends('layouts.design')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}" />
    <link href="{{ asset('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    
</head>
<body>
    
 <!-- Static Table Start -->
 
 <div class="all-content-wrapper">
    <div class="data-table-area mg-b-15">
       <div class="container-fluid">
           
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
                                 
                                   
                               </div>
                               <table  data-toggle="table" data-pagination="true"  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                               data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class=" data-table">
                               <a class="fas fa-folder-plus "  style="font-size:24px; color: #009bdd;" href="javascript:void(0)" id="createNewBook" data-toggle="modal" data-target="#ajaxModel"></a><thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Section</th>
                                           <th>Position</th>
                                           <th>State</th>
                                           <th>Product</th>
                                           <th>PdrPid</th>
                                           <th>Serial</th>
                                           <th>Code</th>
                                           <th>Channel</th>
                                           <th>Observations</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           
       </div>
   </div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
             </div>
            <div class="modal-body">
                <form id="bookForm" name="bookForm" class="form-horizontal">
                   <input type="hidden" name="book_id" id="book_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Section</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="section" name="section" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="position" name="position" placeholder="Enter position" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Product</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="product" name="product" placeholder="Enter product" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pdrpid</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pdrpid" name="pdrpid" placeholder="Enter pdrpid" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Serial</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="Enter Serial" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Code</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Enter code" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Channel</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="channel" name="channel" placeholder="Enter channel" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Observation</label>
                        <div class="col-sm-12">
                            <textarea id="observation" name="observation" required="" placeholder="Enter observation" class="form-control"></textarea>
                        </div>
                    </div>

                   
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>  
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js')}}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js')}}"></script>  
    <script src = "{{ asset('http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js')}}" defer ></script>   

   
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Inventary.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'section', name: 'section'},
            {data: 'position', name: 'position'},
            {data: 'state', name: 'state'},
            {data: 'product', name: 'product'},
            {data: 'pdrpid', name: 'pdrpid'},
            {data: 'serial', name: 'serial'},
            {data: 'code', name: 'code'},
            {data: 'channel', name: 'channel'},
            {data: 'observation', name: 'observation'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("create-book");
        $('#book_id').val('');
        $('#bookForm').trigger("reset");
        $('#modelHeading').html("Create New Book");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editbtn', function () {
      var book_id = $(this).data('id');
      $.get("{{ route('Inventary.index') }}" +'/' + book_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Book");
          $('#saveBtn').val("edit-book");
          $('#ajaxModel').modal('show');
          $('#book_id').val(data.id);
          $('#section').val(data.section);
          $('#position').val(data.position);
          $('#state').val(data.state);
          $('#product').val(data.product);
          $('#pdrpid').val(data.pdrpid);
          $('#serial').val(data.serial);
          $('#code').val(data.code);
          $('#channel').val(data.channel);
          $('#observation').val(data.observation);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#bookForm').serialize(),
          url: "{{ route('Inventary.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#bookForm').trigger("reset");
              $('#ajaxModel').modal('show');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deletebtn', function () {
     
        var book_id = $(this).data("id");
        
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('Inventary.store') }}"+'/'+book_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>


</body>
</html>
@endsection
