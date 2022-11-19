<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Icon -->

    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/adminlte.min.css')?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url(''); ?>"><b>Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <!-- Notification -->
            <?php $this->load->view('layout/notification'); ?>
            
            <?= form_open('Auth/Login') ?>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            <?= form_close(); ?>

            <!-- <p class="mb-1">
              <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="register.html" class="text-center">Register a new membership</a>
            </p> -->
          </div>
    </div>

    <!-- Javascript -->
    <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>

</html>