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
                                 <td>{{ $loan->nchannel }}</td>
                                 <td>{{ $loan->dateloan }}</td>
                                 <td>{{ $loan->estimateddate }}</td>
                                 <td>{{ $loan->realreturn }}</td>
                                 <td>{{ $loan->state }}</td>
                                 <td>{{ $loan->pastdays }}</td>
                                 <td>{{ $loan->observation }}</td>
                                 <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal" data-target="#zoomInDownLoanyUpd{{$loan->id}}"> Edit</i><br>
                                    <i class="far fa-trash-alt iconColorBlue" data-toggle="modal" data-target="#DangerModalDelete"> Delete</i></strong>
                                
                                  
                                    @include('loans.modalUpdate')    
                                  
                                 </td>   

                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               @include('loans.modalDelete')    
            </div>
         </div>
      </div>
   </div>
</div>
@endsection