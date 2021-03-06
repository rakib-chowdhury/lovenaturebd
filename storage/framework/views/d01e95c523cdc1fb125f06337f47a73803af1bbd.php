<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-material/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2016 09:18:31 GMT -->
<?php echo $__env->make('vantage.layout.headlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<input type="hidden" name="base_url" id="base_url" value="<?php echo e(url('/')); ?>">

<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<div id="loadingDiv" style="vantageition: fixed;z-index: 10000;top: 20%;left: 50%;"><img src="<?php echo e(url('public/images/loading.gif')); ?>" alt=""></div>
<div id="wrapper">
    <!-- Top Navigation -->
    <?php echo $__env->make('vantage.layout.top_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <?php echo $__env->make('vantage.layout.left_side_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><?php echo $__env->yieldContent('page_header'); ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <?php echo $__env->yieldContent('page_breadcrumb'); ?>
                </div>
            </div>
            <div class="row">
                <?php echo $__env->yieldContent('page_content'); ?>
            </div>
        </div>
        <footer class="footer text-center"><a style="color:black; font-weight: 400" target="_blank" href=""></a></footer>
    </div>
</div>
<?php echo $__env->make('vantage.layout.footerlink', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
    var base_url=$('#base_url').val();
</script>

<script src="<?php echo e(url('resources/assets/vantage/')); ?>/compiled/flipclock.js"></script>
<script type="text/javascript">
    var clock;
    $(document).ready(function () {
        clock = $('.clock').FlipClock({
            clockFace: 'TwelveHourClock'
            , showSeconds: false
        });
    });
</script>
<script>
    function checkPass(){
        var flag=false;        
        var tmpNewP=$('#new_pass').val();
        var tmpReP=$('#re_pass').val();      

        if(tmpNewP==tmpReP){
           flag=true;
           
        }else{            
            $('#passErr').text('New Password and New Password (Confirm) does not match');
        }
        return flag;     
    }
</script>
</body>
</html>
