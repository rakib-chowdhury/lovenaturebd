@extends('home.layout.app')

@section('content')
    <section id="cruises" class="cruises" data-stellar-background-ratio="0.5">
        <div class="pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <h1>@if(session('language')=='bn'){{$company_info[0]->company_name_bn}}{{' '}}{{$name_bn}}@else{{$company_info[0]->company_name}}{{' '}}{{$name}}@endif</h1>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($country as $row) { ?>
                    <div class="col-md-3 pkg_style" style="">
                        <a href="{{url('hot_deals/view_list')}}/{{$row[0]->country_id}}">
                            <div id="item" class="item wow fadeInDown" data-wow-delay="0.5s" width="">
                                <div class="image">
                                    <img src="{{url('resources')}}/assets/vantage_home/apanel/country_image/6354.jpg"
                                         alt="" height="174px !important" width="100%"/>
                                    <div class="badge"><img
                                                src="{{url('resources')}}/assets/vantage_home/img/fxd_date.png"
                                                alt="fixed date"/></div>
                                    <div class="tools">
                                        <span><i class="fa fa-eye"></i> 250</span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-comments-o"></i> 3</span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-heart-o"></i> 37</span>&nbsp;&nbsp;&nbsp;
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="center">
                                        <h1>{{$row[0]->hasCountry->country_name}}</h1>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            </div>
    </section>
@endsection