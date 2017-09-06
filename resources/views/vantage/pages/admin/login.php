<?php $this->load->view('header_links')?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a ><b>Passport</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><b>Sign in to start your session<b></p>
    

  
    <form action="login/login_auth" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <?php if (isset($error)){
    echo "<div class='alert'>$error</div>";
} ?>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary" value="Sign In" name="Sign_in">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <!-- <a >I forgot my password</a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>


<?php $this->load->view('footer_links')?>