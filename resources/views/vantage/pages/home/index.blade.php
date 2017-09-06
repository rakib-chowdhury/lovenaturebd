@extends('home.layout.app')

@section('specifiedCss')
    <link rel="stylesheet" href="{{ url('resources/') }}/assets/vantage_home/css/summernote/summernote.css">

    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>
    <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
    <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        .demo .item {
            margin-bottom: 60px;
        }

        .content-slider li {
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }

        .content-slider h3 {
            margin: 0;
            padding: 70px 0;
        }

        .demo {
            width: 800px;
        }

        .contentwidht {
        }

        .contentwidht table {
            width: 100% !important;
        }
    </style>

    <style>
        .vticker {
            border: 0px solid red;
            width: 100%;
        }

        .vticker ul {
            padding: 0;
        }

        .vticker li {
            list-style: none;
            border-bottom: 0px solid green;
            padding: 10px;
        }

        .et-run {
            background: red;
        }


    </style>
@endsection

@section('content')
    <div class="slider">
        <div id="owl-slider" class="owl-carousel owl-theme">
            <div class="item">
                <a href="javascript:;" data-text=""><img src="{{url('resources')}}/assets/vantage_home/img/slider/slider1.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider2.jpg"
                            class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider3.jpg"
                            class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider4.jpg"
                            class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider5.jpg"
                            class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider6.jpg"
                            class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img
                            src="{{url('resources')}}/assets/vantage_home/img/slider/slider7.jpg"
                            class="img-responsive"></a>
            </div>
        </div>
        <div class="slider-arrows">
            <i class='icon-arrow-left prev'></i>&nbsp;
            <i class='icon-arrow-right next'></i>
        </div>
    </div>

    <!-- Section About Us Begin -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <section class="aside-fblike">
                        <div>
                            <iframe scrolling="no"
                                    src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FLove-Nature-Bd-444591842546886&amp;width=230&amp;height=220&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"
                                    style="border:none; overflow:hidden; width:330px; height:220px;"
                                    frameborder="0"></iframe>
                        </div>
                    </section>
                </div>
                <div class="col-lg-9">
                    <div style="width: 100%; left: 0px;" class="menu">
                        <div data-url_target="about_us" class="profile-btn menu_button">
                            <img alt="" src="{{url('resources')}}/assets/vantage_home/img/service/about.jpg"
                                 style="width: 100%;">
                            <div class="mask">
                            </div>
                            <a href="{{url('hotel_booking')}}">
                                <div class="heading">
                                    <i class="ion-ios-people-outline hidden-xs"></i>
                                    <h2 style="color:white">@if(session('language')=='bn'){{'হোটেল বুকিং'}}@else{{'Hotel Booking'}}@endif</h2>
                                </div>
                            </a>
                        </div>

                        <!-- Single Navigation Menu Button -->
                        <div data-url_target="service" class="service-btn menu_button">
                            <img style="width: 100%; height: 100%;" alt=""
                                 src="{{url('resources/assets/vantage_home/img/service/service.jpg')}}">
                            <div class="mask">
                            </div>
                            <a href="{{url('transport_booking')}}">
                                <div class="heading">
                                    <i class="ion-ios-lightbulb-outline hidden-xs"></i>
                                    <h2 style="color:white">@if(session('language')=='bn'){{'ট্রান্সপোর্ট'}}@else{{'Transport'}}@endif</h2>
                                </div>
                            </a>
                        </div>

                        <!-- Single Navigation Menu Button [ END ]  -->
                        <div data-url_target="portfolio" class="portfolio-btn menu_button">
                            <img style="width: 100%; height: 100%;" alt=""
                                 src="{{url('resources')}}/assets/vantage_home/img/service/portfolio.jpg">
                            <div class="mask">
                            </div>
                            <a href="{{url('tours')}}">
                                <div class="heading">
                                    <i class="ion-ios-briefcase-outline hidden-xs"></i>
                                    <h2 style="color:white">@if(session('language')=='bn'){{'ট্যুর এবং আকর্ষণ সমূহ'}}@else{{'Tours And Attractions'}}@endif</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--<img src="img/service/hotel.png" alt="">-->
                </div>
            </div>
        </div>
    </section>
    <!-- Section About Us End -->

    <!-- Section Destinations Begin -->
    <section id="destinations" class="destinations">
        <div class="pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>@if(session('language')=='bn'){{'আমাদের প্যাকেজ সমূহ'}}@else{{'LOVE NATURE PACKAGES'}}@endif</h1>
                    </div>
                </div>
                <div class="row">
                    <div id="owl-destinations" class="owl-carousel owl-theme">

                        <div class="item wow fadeInDown" data-wow-delay="0.8s">
                            <div class="image">
                                <a href="{{url('resources')}}/assets/vantage_home/phpackage/p/4.html">
                                    <img src="{{url('resources')}}/assets/vantage_home/img/destination01.jpg" alt=""
                                         class="img-responsive"/>
                                    <div class="badge"><img
                                                src="{{url('resources')}}/assets/vantage_home/img/fxd_date.png"
                                                alt="New"/></div>
                                </a>
                            </div>
                            <a href="{{url('packages/regular_package')}}" style="text-decoration:none;">
                                <div class="details">
                                    <div class="center">
                                        <h1>@if(session('language')=='bn'){{'নিয়মিত প্যাকেজ '}}@else{{'Regular Package'}}@endif </h1>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>

                        <div class="item wow fadeInDown" data-wow-delay="0.6s">
                            <div class="image">
                                <a href="{{url('resources')}}/assets/vantage_home/phpackage/p/2.html">
                                    <img src="{{url('resources')}}/assets/vantage_home/img/destination02.jpg" alt=""
                                         class="img-responsive"/>
                                    <div class="badge"><img
                                                src="{{url('resources')}}/assets/vantage_home/img/fixed_date.png"
                                                alt="New"/></div>
                                </a>
                            </div>
                            <a href="{{url('packages/group_package')}}" style="text-decoration:none;">
                                <div class="details">
                                    <div class="center">
                                        <h1>@if(session('language')=='bn'){{'গ্রূপ প্যাকেজ '}}@else{{'Group Packages'}}@endif</h1>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="item wow fadeInDown" data-wow-delay="0.7s">
                            <div class="image">
                                <a href="{{url('resources')}}/assets/vantage_home/phpackage/p/3.html">
                                    <img src="{{url('resources')}}/assets/vantage_home/img/destination03.jpg" alt=""
                                         class="img-responsive"/>
                                    <div class="badge"><img
                                                src="{{url('resources')}}/assets/vantage_home/img/fxd_date.png"
                                                alt="New"/></div>
                                </a>
                            </div>
                            <a href="{{url('packages/festival_package')}}" style="text-decoration:none;">
                                <div class="details">
                                    <div class="center">
                                        <h1>@if(session('language')=='bn'){{'উৎসব প্যাকেজ '}}@else{{'Festival Packages'}}@endif</h1>
                                        <!--<div class="desc"></div>-->
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="item wow fadeInDown" data-wow-delay="0.5s">
                            <div class="image">
                                <a href="{{url('resources')}}/assets/vantage_home/package/pk/1.html">
                                    <img src="{{url('resources')}}/assets/vantage_home/img/destination04.jpg" alt=""
                                         class="img-responsive"/>
                                    <div class="badge"><img
                                                src="{{url('resources')}}/assets/vantage_home/img/any_date.png"
                                                alt="Best Choice"/></div>
                                </a>
                            </div>
                            <a href="{{url('online_booking')}}" style="text-decoration:none;">
                                <div class="details">
                                    <div class="center">
                                        <h1>@if(session('language')=='bn'){{'অনলাইন বুকিং'}}@else{{'Online Booking'}}@endif </h1>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Most Popular Tours Begin -->
    <section id="tours" class="tours">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>@if(session('language')=='bn'){{'আকর্ষণীয় ট্যুর সমূহ'}}@else{{'Most popular Tours'}}@endif</h1>
                </div>
            </div>

            <div class="tour-detail hidden">
                <div class="loading">Please wait for loading...</div>
            </div>

            <div class="row">

                <div id="owl-tours" class="owl-carousel owl-theme">
                    <?php if (session('language') == 'bn') { ?>
                    <?php foreach ($package_bn as $u) { ?>
                    <div class="item wow fadeInDown" data-wow-delay="0.6s">
                        <!-- <img src="img/tour02.jpg" alt="" class="img-responsive" /> -->

                        <img src="{{url('public')}}/images/package/{{$u->hasImage[0]->image}}" width="263"
                             height="171"
                             alt="{{$u->title}}">
                        <div class="badge"><img src="{{url('resources')}}/assets/vantage_home/img/badge_new.png"
                                                alt="New"/></div>
                        <div class="tour-title">
                            <div class="title">{{$u->title}}</div>
                            <a>প্যাকেজ কোড: {{$u->package_code}}</a>
                        </div>
                        <div class="tour-details">
                            <a class="btn btn-success" href="{{url('package/view_details/'.$u->id)}}">More
                                info</a>
                        </div>
                    </div>
                        <?php }}else { ?>
                        <?php foreach ($package as $u) { ?>
                        <div class="item wow fadeInDown" data-wow-delay="0.6s">
                            <!-- <img src="img/tour02.jpg" alt="" class="img-responsive" /> -->

                            <img src="{{url('public')}}/images/package/{{$u->hasImage[0]->image}}" width="263"
                                 height="171"
                                 alt="{{$u->title}}">
                            <div class="badge"><img src="{{url('resources')}}/assets/vantage_home/img/badge_new.png"
                                                    alt="New"/></div>
                            <div class="tour-title">
                                <div class="title">{{$u->title}}</div>
                                <a>Package Code: {{$u->package_code}}</a>
                            </div>
                            <div class="tour-details">
                                <a class="btn btn-success" href="{{url('package/view_details/'.$u->id)}}">More
                                    info</a>
                            </div>
                        </div>
                        <?php }} ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Most Popular Tours Deal End -->
    <!-- Section Flights & Hotels Begin -->

    <!-- Section Hot Deals Begin -->
    <section id="deals" class="deals" style="padding: 20px 0 80px 0;">
        <div class="container">
            <div class="row">
                <h1>@if(session('language')=='bn'){{'আকর্ষণীয় সুযোগ সমূহ'}}@else{{'The best hot deals'}}@endif</h1>
            </div>
            <div class="row">
                <div id="owl-deals" class="owl-carousel">
                    <div class="item wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="image">
                            <a href="{{url('hot_deals/most_economy')}}" style="text-decoration:none;">
                                <!-- <div class="save"><div class="save-inner">SAVE<br />%36</div></div> -->
                                <img src="{{url('resources')}}/assets/vantage_home/img/deals01.jpg" alt=""
                                     class="img-responsive"/>
                                <div class="title">@if(session('language')=='bn'){{' মোস্ট ইকোনমি'}}@else{{'Most Economy'}}@endif</div>
                            </a>
                        </div>
                        <div class="details">

                            <br/>
                            <a class="btn btn-success"
                               href="{{url('hot_deals/most_economy')}}">@if(session('language')=='bn'){{'বিস্তারিত দেখুন'}}@else{{'View Details'}}@endif</a>
                        </div>
                    </div>
                    <div class="item wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="image">
                            <a href="{{url('hot_deals/12_months_installment')}}" style="text-decoration:none;">
                                <img src="{{url('resources')}}/assets/vantage_home/img/deals02.jpg" alt=""
                                     class="img-responsive"/>
                                <div class="title">@if(session('language')=='bn'){{'১২ মাসের কিস্তি'}}@else{{'12 Months Instalment'}}@endif</div>
                            </a>
                        </div>
                        <div class="details">
                            <br/>
                            <a class="btn btn-success"
                               href="{{url('hot_deals/12_months_installment')}}">@if(session('language')=='bn'){{'বিস্তারিত দেখুন'}}@else{{'View Details'}}@endif</a>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-delay="0.7s">
                        <div class="image">
                            <a href="{{url('hot_deals/discount_offer')}}" style="text-decoration:none;">
                                <img src="{{url('resources')}}/assets/vantage_home/img/deals03.jpg" alt=""
                                     class="img-responsive"/>
                                <div class="title">@if(session('language')=='bn'){{'ডিসকাউন্ট অফার'}}@else{{'Discount Offer'}}@endif</div>
                            </a>
                        </div>
                        <div class="details">
                            <br/>
                            <a class="btn btn-success"
                               href="{{url('hot_deals/discount_offer')}}">@if(session('language')=='bn'){{'বিস্তারিত দেখুন'}}@else{{'View Details'}}@endif</a>
                        </div>
                    </div>
                    <div class="item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="image">
                            <a href="{{url('hot_deals/air_ticket_offer')}}" style="text-decoration:none;">
                                <img src="{{url('resources')}}/assets/vantage_home/img/deals04.jpg" alt=""
                                     class="img-responsive"/>
                                <div class="title">@if(session('language')=='bn'){{'এয়ার টিকেট অফার'}}@else{{'Air Ticket Offer'}}@endif </div>
                            </a>
                        </div>
                        <div class="details">
                            <br/>
                            <a class="btn btn-success"
                               href="{{url('hot_deals/air_ticket_offer')}}">@if(session('language')=='bn'){{'বিস্তারিত দেখুন'}}@else{{'View Details'}}@endif </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section Video Gallery Begin -->
    <section id="vgallery" class="vgallery ">
        <div class="container">
            <div class="row">
                <h1 class="video-title">@if(session('language')=='bn'){{'ভিডিও গ্যালারি'}}@else{{'Video Gallery'}}@endif</h1>
            </div>
            <div class="row">
                <?php foreach ($video as $u) { ?>
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <?= $u->video ?>
                    </div>
                    <p>@if(session('language')=='bn'){{$u->name_bn}}@else{{$u->name}}@endif</p>
                </div>
                <?php } ?>
                <div class="text-right"><a href="{{url('video_gallery')}}" class="btn btn-primary">More...</a></div>
            </div>
        </div>
    </section>
    <!-- Section Video Gallery  End -->
@endsection