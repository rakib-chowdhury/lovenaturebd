<?php $__env->startSection('content'); ?>
    <section id="cruises" class="cruises" data-stellar-background-ratio="0.5">
        <div class="pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <br>
                        <h1><?php if(session('language')=='bn'): ?><?php echo e($company_info[0]->company_name_bn); ?><?php echo e(' '); ?><?php echo e($name_bn); ?><?php else: ?><?php echo e($company_info[0]->company_name); ?><?php echo e(' '); ?><?php echo e($name); ?><?php endif; ?></h1>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($country as $row) { ?>
                    <div class="col-md-3 pkg_style" style="">
                        <a href="<?php echo e(url('package/view_list')); ?>/<?php echo e($row[0]->country_id); ?>">
                            <div id="item" class="item wow fadeInDown" data-wow-delay="0.5s" width="">
                                <div class="image">
                                    <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/country_image/6354.jpg"
                                         alt="" height="174px !important" width="100%"/>
                                    <div class="badge"><img
                                                src="<?php echo e(url('resources')); ?>/assets/vantage_home/img/fxd_date.png"
                                                alt="fixed date"/></div>
                                    <div class="tools">
                                        <span><i class="fa fa-eye"></i> 250</span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-comments-o"></i> 3</span>&nbsp;&nbsp;&nbsp;
                                        <span><i class="fa fa-heart-o"></i> 37</span>&nbsp;&nbsp;&nbsp;
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="center">
                                        <h1><?php echo e($row[0]->hasCountry->country_name); ?></h1>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>