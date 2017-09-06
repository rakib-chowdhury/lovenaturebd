@extends('home.layout.app')

@section('content')
    <div class="slider">
        <div id="owl-slider" class="owl-carousel owl-theme">
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('/')}}" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider2.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider3.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider4.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider5.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider6.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider7.jpg" class="img-responsive"></a>
            </div>
        </div>
        <div class="slider-arrows">
            <i class='icon-arrow-left prev'></i>&nbsp;
            <i class='icon-arrow-right next'></i>
        </div>
    </div>
    <section class="banners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                    <h1 style="color:#14477B">@if(session('language')=='bn'){{'ছবি গ্যালারি'}}@else{{'Photo Gallery'}}@endif </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($country as $u) { ?>
                    <div class="col-md-3 " style="margin-top: 10px">
                        <a href="{{url('gallery_details')}}/{{$u[0]->country_id}}" target="blank">
                            <h2>{{$u[0]->hasCountry->country_name}}</h2>

                            <img src="{{url('public')}}/images/gallery/{{$u[0]->image}}" style="margin-top: 10px" height="150"/>

                            <h5 align="center">@if(session('language')=='bn'){{'অ্যালবাম দেখুন'}}@else{{'View Album'}}@endif</h5>
                        </a>
                    </div>
                        <?php } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <br>
    </section>
@endsection