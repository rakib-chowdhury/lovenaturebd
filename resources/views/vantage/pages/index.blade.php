@extends('vantage.layout.main')
@section('page_title','Dashboard')
@section('page_header','Dashboard')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="row row-in">
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i data-icon="E" class="linea-icon linea-basic"></i>
                                <h5 class="text-muted vb">Today Visitor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-danger"></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb">Total Visitor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-megna"></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe00b;"></i>
                                <h5 class="text-muted vb">Total Client</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-primary"></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  b-0">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                       data-icon="&#xe016;"></i>
                                <h5 class="text-muted vb">Total Doctor</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-success"></h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Pending Client</h3>
                        <div class="table-responsive" style="max-height: 200px; min-height: 200px; overflow-y: auto">
                            <table id="myTable1"
                                   class="table table-striped color-bordered-table success-bordered-table">
                                <thead>
                                <tr>
                                    <th style="text-align: center; width: 4%;">#</th>
                                    <th style="text-align: center; ">Image</th>
                                    <th style="text-align: center; ">Name</th>
                                    <th style="text-align: center; ">Email</th>
                                    <th style="text-align: center; ">Contact</th>
                                    <th style="text-align: center; ">Profession</th>
                                    <th style="text-align: center; width: 8%;">Status</th>
                                    <th style="text-align: center; width: 12%;">
                                        <span class="glyphicon glyphicon-wrench"></span>
                                    </th>
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
@endsection
