<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sesion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/plugins/template/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">


<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Admin</b>UDG</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Ingresa tus datos</p>
      <form action="<?php echo base_url() ?>agregarUsuario" method="post">
        <div class="input-group mb-3">
          <div class="input-group-append">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="emailUsuario" id="emailUsuario" class="form-control" placeholder="Email o Usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="clave" id="clave" class="form-control" placeholder="Password" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          
          <div class="input-group-append">
            
              
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          </div>

        </div>
      </form>

       <br>

       <div class="row">
            <div class="col-12" style="text-aling: center">
                <?php if(isset($mensaje)) { ?>
                    <div class="alert alert-<?=$tipo ?>">
                        <?php echo $mensaje ?>
                    </div>
                <?php } ?>
            </div>
       </div>

  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>../assets/plugins/template/js/adminlte.min.js"></script>
</body>
</html>
