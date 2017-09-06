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
                    <h1 style="color:#14477B">
                        {{$country[0]->country_name}} Photo Gallery
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="moments-bottom">
                        <div class="moments-1">
                            <?php foreach ($gallery_details as $u) { ?>
                            <div class="col-md-3 moments-left">
                                <figure class="snip1512">
                                    <img src="{{url('public')}}/images/gallery/{{$u->image}}" height="150"/>
                                    <figcaption>
                                        <h2>{{$u->caption}}</h2>
                                    </figcaption>
                                </figure>
                            </div>
                                <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><br>
    </section>
@endsection