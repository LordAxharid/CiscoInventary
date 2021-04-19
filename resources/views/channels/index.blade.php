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
                                                    <th data-field="section" data-editable="true">Section</th>
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
