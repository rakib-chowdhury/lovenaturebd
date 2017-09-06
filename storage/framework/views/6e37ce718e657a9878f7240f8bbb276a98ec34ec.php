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
                <a href="<?php echo e(url('login')); ?>" class="login_btn"><i
                            class="fa fa-user"></i><?php if(session('language')=='bn'): ?><?php echo e('লগ ইন'); ?><?php else: ?><?php echo e('Login'); ?><?php endif; ?></a>
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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>" data-scroll><img
                                src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/logo.png"
                                class="img-responsive" width="210"
                                height="90" alt="love nature"/></a>


                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo e(url('/')); ?>"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('হোম'); ?><?php else: ?><?php echo e('Home'); ?><?php endif; ?></a></li>
                        <li><a href="<?php echo e(url('about_us')); ?>"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('আমাদের সম্পর্কে'); ?><?php else: ?><?php echo e('About Us'); ?><?php endif; ?></a>
                        </li>
                        <li><a href="<?php echo e(url('home#destinations')); ?>"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('প্যাকেজ সমূহ'); ?><?php else: ?><?php echo e('Packages'); ?><?php endif; ?></a>
                        </li>
                        <li><a href="<?php echo e(url('gallery')); ?>"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('গ্যালারী'); ?><?php else: ?><?php echo e('Gallery'); ?><?php endif; ?></a></li>
                        <!--						<li><a href="#tours" data-scroll>Most Tours</a></li>-->
                        <!--						<li><a href="#cruises" data-scroll>Cruises</a></li>-->
                        <li><a href="<?php echo e(url('search')); ?>"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('অনুসন্ধান'); ?><?php else: ?><?php echo e('Search'); ?><?php endif; ?></a></li>
                        <li><a href="#contact"
                               data-scroll><?php if(session('language')=='bn'): ?><?php echo e('যোগাযোগ'); ?><?php else: ?><?php echo e('Contact'); ?><?php endif; ?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

</section>