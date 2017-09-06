<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Al Jeasour Human Resource</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo e(url('resources')); ?>/assets/vantage_home/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <!-- iCheck -->
    <link href="<?php echo e(url('resources')); ?>/assets/vantage_home/style.css" rel="stylesheet">
</head>
<body style="height:100%!important;">

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-offset-2 col-xs-8 login-window">
                <?php
                $exc = session('message');
                if(!empty($exc)):?>
                <div class="col-lg-12" align="center">
                    <div class="alert alert-dismissable alert-danger" style="opacity: 0.8">
                        <a id='close'
                           onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'
                           class="close" data-dismiss="alert">&times;</a>
                        <!-- <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span> -->
                        <strong><?=$exc;?></strong>
                    </div>
                </div>
                <?php session()->forget('error'); session()->flush(); ?>
                <?php endif;?>
                <div class="row">
                    <div class="col-md-4 col-xs-4 left-wrapper">
                        <form role="form" action="login/login_check" method="post">
                            <?php echo e(csrf_field()); ?>

                            <img class="img-responsive center-block" src="<?php echo e(url('public')); ?>/images/logo.png" />
                            <h4><strong>MEMBER LOGIN</strong></h4>
                            <div class="form-group">
                                <input class="form-control" name="user_name" id="user_name" type="text"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control " name="password" id="password" type="password"
                                placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-default">
                                LOGIN
                            </button>
                            <?php if (session('error')) {
                                echo "<div class='alert'>".session('error')."</div>";
                            } ?> <?php \Illuminate\Support\Facades\Session::put('error',''); ?>
                        </form>

                    </div>
                    <div class="col-md-8 col-xs-8 right-wrapper">
                        <img class="img-responsive logo-wasif col-md-offset-2 col-md-8 col-sm-6 col-sm-offset-3" src="<?php echo e(url('public')); ?>/images/logo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery 2.2.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>