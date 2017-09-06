<?php $__env->startSection('page_title','Dashboard'); ?>
<?php $__env->startSection('page_header','Dashboard'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="container dash-container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="<?php echo e(url('hotel/show')); ?>" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #1ABC9C">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles"><?php echo e(sizeof($hotel)); ?></div>
                            Hotels
                    </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="<?php echo e(url('transport/show')); ?>" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #FB6E52">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles "><?php echo e(sizeof($transport)); ?></div>
                            Transports
                    </div>
                    </a>
                </div>
                    <div class="col-md-4 col-sm-6 download-form">
                        <a href="<?php echo e(url('tours_attractions/show')); ?>" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <div class="bubbles "><?php echo e(sizeof($tour)); ?></div>
                                Tours & Attractions
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 download-form">
                        <a href="<?php echo e(url('package/show')); ?>" class="dash-titles">
                        <div class="panel panel-hover dash-panel" style="background: #11A7DB">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <div class="bubbles "><?php echo e(sizeof($package_info)); ?></div>
                                Packages
                        </div>
                        </a>
                    </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="<?php echo e(url('hot_deals/show')); ?>" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #435059">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles "><?php echo e(sizeof($hot_deal)); ?></div>
                            Hot deals
                    </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 download-form">
                    <a href="<?php echo e(url('video/show')); ?>" class="dash-titles">
                    <div class="panel panel-hover dash-panel" style="background: #DE291E">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <div class="bubbles "><?php echo e(sizeof($video)); ?></div>
                        Videos
                    </div>
                    </a>
                </div>
            </div><!-- /row -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>