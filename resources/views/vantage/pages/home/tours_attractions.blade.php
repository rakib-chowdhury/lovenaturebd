@extends('home.layout.app')

@section('content')
    <section id="cruises" class="cruises" data-stellar-background-ratio="0.5">
        <div class="pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <h1>@if(session('language')=='en'){{'LoveNatureBD Tours And Attractions'}}@else{{'ট্যুর এবং আকর্ষণসমূহ '}}@endif</h1>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($country as $row) { ?>
                    <div class="col-md-3 pkg_style" style="">
                        <div id="item" class="item wow fadeInDown" data-wow-delay="0.5s" width="">
                            <a href="{{url('details_tours')}}/{{$row[0]->country_id}}">
                                <div class="image">
                                    <img src="{{url('resources')}}/assets/vantage_home/apanel/country_image/7098.jpg"
                                         alt="" height="174px !important" width="100%"/>
                                </div>

                                <div class="details">
                                    <div class="center">
                                        <h1>{{$row[0]->hasCountry->country_name_bn}}</h1>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>
@endsection