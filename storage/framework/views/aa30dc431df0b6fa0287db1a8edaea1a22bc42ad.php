<?php $__env->startSection('content'); ?>
    <div class="slider">
        <div id="owl-slider" class="owl-carousel owl-theme">
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('/')); ?>" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider2.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider3.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider4.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider5.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider6.jpg" class="img-responsive"></a>
            </div>
            <div class="item">
                <a href="javascript:;" data-text=""><img src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/slider/slider7.jpg" class="img-responsive"></a>
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
                    <h1 style="color:#14477B"><?php if(session('language')=='bn'): ?><?php echo e('ছবি গ্যালারি'); ?><?php else: ?><?php echo e('Photo Gallery'); ?><?php endif; ?> </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($country as $u) { ?>
                    <div class="col-md-3 " style="margin-top: 10px">
                        <a href="<?php echo e(url('gallery_details')); ?>/<?php echo e($u[0]->country_id); ?>" target="blank">
                            <h2><?php echo e($u[0]->hasCountry->country_name); ?></h2>

                            <img src="<?php echo e(url('public')); ?>/images/gallery/<?php echo e($u[0]->image); ?>" style="margin-top: 10px" height="150"/>

                            <h5 align="center"><?php if(session('language')=='bn'): ?><?php echo e('অ্যালবাম দেখুন'); ?><?php else: ?><?php echo e('View Album'); ?><?php endif; ?></h5>
                        </a>
                    </div>
                        <?php } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <br>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>