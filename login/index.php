<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de compras</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/proyecto/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/proyecto/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/proyecto/dist/css/adminlte.min.css">
  <!-- Libreria Sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->

    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
      $respuesta = $_SESSION['mensaje']; ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Datos incorrectos',
          text: '<?php echo $respuesta ?>',
          //footer: '<a href="">Ingrese sus datos correctamente</a>'
        })
      </script>
      <?php
      session_destroy();
    }
    ?>

    <!-- LOGO
    <center><img src="../public/images/logo-compras2.png" alt="" width="300px">
    </center>
  -->

    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>SISTEMA DE COMPRAS</b></a>
      </div>

      <style>
        body {
          background-image: url("../public/images/fondo5.jpg");
          background-size: cover;
          /* Ajusta la imagen para cubrir todo el fondo */
          background-position: center;
          /* Centra la imagen en el fondo */
          height: 100vh;
          /* Establece la altura del fondo al 100% del viewport (pantalla) */
          margin: 0;
          /* Elimina el margen predeterminado del cuerpo */
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .card {
          /* Añade cualquier estilo adicional para la tarjeta aquí */
          background-color: rgba(255, 255, 255, 0.8);
          /* Ajusta la opacidad según tus preferencias */
        }

        .card-header a {
          cursor: default;
          pointer-events: none;
        }/*elimina el subrayado azul del sistema de compras*/
      </style>

      <div class="card-body">
        <p class="login-box-msg">Digite sus usuario y contraseña</p>

        <form action="../app/controllers/login/ingreso.php" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="contrasena" class="form-control" placeholder="Password">
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
                  Recuerdame
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../public/templeates/proyecto/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../public/templeates/proyecto/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../public/templeates/proyecto/dist/js/adminlte.min.js"></script>
</body>

</html>