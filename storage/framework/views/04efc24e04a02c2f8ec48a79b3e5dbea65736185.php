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
                    <h1 style="color:#14477B"><?php if(session('language')=='bn'): ?><?php echo e('আমাদের সম্পর্কে'); ?><?php else: ?><?php echo e('About Us'); ?><?php endif; ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-justify" class="banner-slogan wow fadeInRight">

                            <?php if(session('language')=='bn'): ?><?php echo e($about_us[0]->details_bn); ?><?php else: ?><?php echo e($about_us[0]->details); ?><?php endif; ?>
                    </div>
                </div>
            </div>
        </div><br>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>