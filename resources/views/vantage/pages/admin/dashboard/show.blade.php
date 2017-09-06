@extends('vantage.layout.main')
@section('page_title','Dashboard')
@section('page_header','Dashboard')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li class="active"><a href="{{url('home/dashboard')}}">Dashboard</a></li>
    </ol>
@endsection

@section('page_content')
    <div class="container dash-container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="{{url('hotel/show')}}" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #1ABC9C">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles">{{sizeof($hotel)}}</div>
                            Hotels
                    </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="{{url('transport/show')}}" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #FB6E52">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles ">{{sizeof($transport)}}</div>
                            Transports
                    </div>
                    </a>
                </div>
                    <div class="col-md-4 col-sm-6 download-form">
                        <a href="{{url('tours_attractions/show')}}" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <div class="bubbles ">{{sizeof($tour)}}</div>
                                Tours & Attractions
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 download-form">
                        <a href="{{url('package/show')}}" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <div class="bubbles ">{{sizeof($package_info)}}</div>
                                Packages
                        </div>
                        </a>
                    </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="{{url('hot_deals/show')}}" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #435059">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles ">{{sizeof($hot_deal)}}</div>
                            Hot deals
                    </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="{{url('video/show')}}" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #DE291E">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles ">{{sizeof($video)}}</div>
                        Videos
                    </div>
                    </a>
                </div>
            </div><!-- /row -->
        </div>
    </div>
@endsection

