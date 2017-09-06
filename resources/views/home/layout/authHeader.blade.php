<section class="header">
    <div class="top_bar" style="height:25px; background-color:#32A97C;padding-top:2px;">
        <div class="container">
            <div class="col-sm-6 col-xs-6 text-left">
                <span class="lang_btn"></span>
                <a style="cursor: pointer" onclick="setLang('en')" class="lang_btn">EN</a>
                <span class="lang_btn"> | </span>
                <a style="cursor: pointer" onclick="setLang('bn')" class="lang_btn">BN</a>
            </div>
            <div class="col-sm-6 col-xs-6 text-right">
                <a href="{{url('login')}}" class="login_btn"><i
                            class="fa fa-user"></i>@if(session('language')=='bn'){{'লগ ইন'}}@else{{'Login'}}@endif</a>
            </div>
        </div>
    </div>
    <div class="topnav">
        <!-- Static navbar -->
        <div class="navbar navbar-custom navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}" data-scroll><img
                                src="{{url('resources')}}/assets/vantage_home/img/logo.png"
                                class="img-responsive" width="210"
                                height="90" alt="love nature"/></a>


                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/')}}"
                               data-scroll>@if(session('language')=='bn'){{'হোম'}}@else{{'Home'}}@endif</a></li>
                        <li><a href="{{url('about_us')}}"
                               data-scroll>@if(session('language')=='bn'){{'আমাদের সম্পর্কে'}}@else{{'About Us'}}@endif</a>
                        </li>
                        <li><a href="{{url('home#destinations')}}"
                               data-scroll>@if(session('language')=='bn'){{'প্যাকেজ সমূহ'}}@else{{'Packages'}}@endif</a>
                        </li>
                        <li><a href="{{url('gallery')}}"
                               data-scroll>@if(session('language')=='bn'){{'গ্যালারী'}}@else{{'Gallery'}}@endif</a></li>
                        <!--						<li><a href="#tours" data-scroll>Most Tours</a></li>-->
                        <!--						<li><a href="#cruises" data-scroll>Cruises</a></li>-->
                        <li><a href="{{url('search')}}"
                               data-scroll>@if(session('language')=='bn'){{'অনুসন্ধান'}}@else{{'Search'}}@endif</a></li>
                        <li><a href="#contact"
                               data-scroll>@if(session('language')=='bn'){{'যোগাযোগ'}}@else{{'Contact'}}@endif</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

</section>