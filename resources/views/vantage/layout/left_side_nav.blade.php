<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{url('home/dashboard')}}" class="waves-effect" style="font-size: 20px;">
                    <i class="fa fa-dashboard zmdi zmdi-apps zmdi-hc-fw fa-fw" style=""></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            <!-----------------------Package----------------->
            <li>
                <a href="{{url('hotel/show')}}" class="waves-effect">
                    <i class="fa-fw fa fa-shopping-bag" ></i>
                    <span class="hide-menu">Hotels</span>
                </a>
            </li>
            <li>
                <a href="{{ url('transport/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-list" style=""></i>
                    <span class="hide-menu">Transports</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('tours_attractions/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-fire" style=""></i>
                    <span class="hide-menu">Tours & Attractions
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('package/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-fire" style=""></i>
                    <span class="hide-menu">Packages
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('hot_deals/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-fire" style=""></i>
                    <span class="hide-menu">Hot deals
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ url('gallery/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-cart-plus" style=""></i>
                    <span class="hide-menu">Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ url('video/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-cart-plus" style=""></i>
                    <span class="hide-menu">Videos</span>
                </a>
            </li>

            <li>
                <a href="{{ url('about_us/edit') }}" class="waves-effect">
                    <i class="fa-fw fa fa-anchor" style=""></i>
                    <span class="hide-menu">About Us</span>
                </a>
            </li>
			 <li>
                <a href="{{ url('contact/edit') }}" class="waves-effect">
                    <i class="fa-fw fa fa-adjust" style=""></i>
                    <span class="hide-menu">Contact Info</span>
                </a>
            </li>
        </ul>
    </div>
</div>

