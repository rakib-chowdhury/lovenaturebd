@extends('vantage.layout.main')
@section('page_title','Password Change')
@section('page_header','Password Change')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Change Password</li>
    </ol>
@endsection

@section('page_content')
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-10 display-table-cell" style="padding-bottom:0px!important;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-hover ">
                            <h2 style="text-align: center">Change Password</h2>
                            <hr>
                            <div class="row">
                                <div class="col-sm-10">
                                    <form id="chngPass" action="{{url('login/update_password')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <label for="current_password" class="col-md-3 control-label" style="text-align: right">Current Password</label>
                                                <div class="col-md-9">
                                                    <input name="current_password" id="current_password" required type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <label for="new_password" class="col-md-3 control-label" style="text-align: right">New Password</label>
                                                <div class="col-md-9">
                                                    <input name="new_password" id="new_password" required type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <label for="confirm_password" class="col-md-3 control-label" style="text-align: right">New Password (Confirm)</label>
                                                <div class="col-md-9">
                                                    <input name="confirm_password" id="confirm_password" required type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-md-offset-0"><p style="color:red;" id="passErr"></p></div>
                                        </div>
                                        <div id="errMsg" class=" form-group" style="text-align: center;">

                                        </div>
                                        <div class=" form-group" style="text-align: center;">
                                            <button class="btn" type="submit" name="s_btn" value="add"
                                                    style="background: #8bc541; color: whitesmoke;">Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
