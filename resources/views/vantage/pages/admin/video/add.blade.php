@extends('vantage.layout.main')
@section('page_title','Video')
@section('page_header','Add Video')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('video/show')}}">Video</a></li>
        <li class="active">Add Video</li>
    </ol>
@endsection

@section('page_content')
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-12 display-table-cell" style="padding-bottom:0px!important;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-hover ">
                            <h2 style="text-align: center">Add Video</h2>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <form class="form-horizontal" id="add_user_form"
                                          action="{{url('video/add_post')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="" class="col-sm-4"><span style="color: red;">* </span>Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" id="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-4"><span style="color: red;">* </span>নাম(বাংলায়)</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name_bn" id="name_bn" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4"><span style="color: red;">* </span>Video Link</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="video" class="form-control" required>
                                                <span style="color: red;" id="video_err"></span>
                                            </div>
                                        </div>
                                        <div class="form-group" style="text-align: center">
                                            <button class="btn" type="submit" name="s_btn" value="add"
                                                    style="background: #8bc541; color: whitesmoke;">Add
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-sm-8" style="max-height:350px; overflow-y:auto; border-left:1px solid black">
                                    <div class="form-group col-md-12">
                                        <label class="form-control" for="">Step-1: Open Your Video In Youtube</label>
                                        <div class="col-md-10 col-md-offset-1">
                                            <img style="width:100%; height:350px;" src="{{url('resources')}}/assets/vantage_home/video/step1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-control" for="">Step-2: Click "Share" Under Your Video</label>
                                        <div class="col-md-10 col-md-offset-1">
                                            <img style="width:100%; height:350px;" src="{{url('resources')}}/assets/vantage_home/video/step2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-control" for="">Step-3: Click "Embed"</label>
                                        <div class="col-md-10 col-md-offset-1">
                                            <img style="width:100%; height:350px;" src="{{url('resources')}}/assets/vantage_home/video/step4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-control" for="">Step-4: Copy The Link As Shown In The Picture And Paste It In "Video Link"</label>
                                        <div class="col-md-10 col-md-offset-1">
                                            <img style="width:100%; height:350px;" src="{{url('resources')}}/assets/vantage_home/video/step5.png" alt="">
                                        </div>
                                    </div>
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