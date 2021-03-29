@extends('layouts.design')
@extends('layouts.modals')


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
                              <a class="fas fa-folder-plus"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert"></a>
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
                                        <td>{{ $inventary->position }}</td>
                                        <td>{{ $inventary->state }}</td>
                                        <td>{{ $inventary->product }}</td>
                                        <td>{{ $inventary->pdrpid }}</td>
                                        <td>{{ $inventary->serial }}</td>
                                        <td>{{ $inventary->code }}</td>
                                        <td>{{ $inventary->channel }}</td>
                                        <td>{{ $inventary->observation }}</td>
                                        <td>   
                                               
                                            <a  class="far fa-edit"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert1"></a>
                                            <a class="far fa-trash-alt"  style="color: #009bdd;" href="#" data-toggle="modal" data-target="#PrimaryModalalert2"></a>
                                            
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

@endsection