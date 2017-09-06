@extends('home.layout.app')

@section('content')
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:#14477B">@if(session('language')=='bn'){{$package[0]->hasCountry->country_name }}{{' '}}{{'নিয়মিত প্যাকেজ'}}@else{{$package[0]->hasCountry->country_name }}{{' '}}{{'Regular Package'}}@endif </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="left_contant left_float">
                        <div class="left_menu" style=" margin-top:-30px;">
                            <div class="heading" style="margin-bottom:35px;">Regular Packages</div>
                            <ul>
                                <?php foreach ($country as $u) { ?>
                                <li><a href="{{url('hot_deals/view_list')}}/{{$u[0]->country_id}}">
                                        {{$u[0]->hasCountry->country_name}} Tour</a></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12 right_contant_02 ">
                        <div class="h5h" style="padding-top:10px;">@if(session('language')=='bn'){{'প্যাকেজের তালিকা'}}@else{{'Package List'}}@endif</div>
                        <?php if(session('language') == 'bn') { ?>
                        <?php foreach ($package_bn as $key=>$row) { ?>
                        <div class="panel panel-default"
                             style="background-color:rgba(0,153,204,0.1); font-size:11px;  box-shadow: 0 0 2px rgba(0, 102, 153, 0.3) inset;">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <h2 style="color: #003463;letter-spacing: 1px;padding-bottom: 10px;text-align: left;">{{$row->title}}</h2>
                                            <a href="../../../../phbooking/pid/4/rid/134/packcode/INS001PD.html">
                                                <img src="{{url('resources')}}/assets/vantage_home/apanel/uploaded/2206.jpg"
                                                     width="100%" alt="3 Nights Shillong , Cheerapunjee(india)"></a>
                                            <h5 class="package_code">{{$row->package_code}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="datiels" style="text-align: justify">
                                            <h2 style="text-align: left;padding: 0px 0px 1px 0px;letter-spacing: 1px;">{{$row->package_name}}</h2>
                                            <div style="color:#000;"><p><font face="Times New Roman"><b><span
                                                                    style="font-size: 14px;">প্যাকেজের বিবরণ:</span><span
                                                                    class="rinput"></span></b><span
                                                                style="font-size: 14px;"><br></span></font></p>
                                                <ul style="list-style: none">
                                                    <li style="line-height: 1;"><font face="Times New Roman"><span
                                                                    style="font-size: 14px;"><?=$row->package_description?> </span></font><font
                                                                face="Times New Roman"><span
                                                                    style="font-size: 14px;"><br></span></font></li>
                                                </ul>
                                                <p></p></div>

                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{url('package/view_details')}}/{{$row->id}}">
                                            <button type="submit" class="btn btn-primary" style="color:white">বিস্তারিত দেখুন
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}else { ?>
                    </div>
<!--                        --><?php //else { ?>
                        <?php foreach ($package as $key=>$row) { ?>
                        <div class="panel panel-default"
                             style="background-color:rgba(0,153,204,0.1); font-size:11px;  box-shadow: 0 0 2px rgba(0, 102, 153, 0.3) inset;">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <h2 style="color: #003463;letter-spacing: 1px;padding-bottom: 10px;text-align: left;">@if(session('language')=='bn'){{$row->title_bn}}@else{{$row->title}}@endif{{$row->title}}</h2>
                                            <a href="../../../../phbooking/pid/4/rid/134/packcode/INS001PD.html">
                                                <img src="{{url('resources')}}/assets/vantage_home/apanel/uploaded/2206.jpg"
                                                     width="100%" alt="3 Nights Shillong , Cheerapunjee(india)"></a>
                                            <h5 class="package_code">{{$row->package_code}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="datiels" style="text-align: justify">
                                            <h2 style="text-align: left;padding: 0px 0px 1px 0px;letter-spacing: 1px;">{{$row->package_name}}</h2>
                                            <div style="color:#000;"><p><font face="Times New Roman"><b><span
                                                                    style="font-size: 14px;">Package Include:</span><span
                                                                    class="rinput"></span></b><span
                                                                style="font-size: 14px;"><br></span></font></p>
                                                <ul style="list-style: none">
                                                    <li style="line-height: 1;"><font face="Times New Roman"><span
                                                                    style="font-size: 14px;"><?=$row->package_description?> </span></font><font
                                                                face="Times New Roman"><span
                                                                    style="font-size: 14px;"><br></span></font></li>
                                                </ul>
                                                <p></p></div>

                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="{{url('hot_deals/view_details')}}/{{$row->id}}">
                                            <button type="submit" class="btn btn-primary" style="color:white">Details
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
@endsection