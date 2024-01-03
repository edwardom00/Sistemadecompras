
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de compras</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/proyecto/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/proyecto/dist/css/adminlte.min.css">
  <!-- Libreria Sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- DataTables -->
  <link rel="stylesheet"
    href="<?php echo $URL; ?>/public/templeates/proyecto/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo $URL; ?>/public/templeates/proyecto/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo $URL; ?>/public/templeates/proyecto/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- jQuery -->
  <script src="<?php echo $URL; ?>/public/templeates/proyecto/plugins/jquery/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/d6c86ba182.js" crossorigin="anonymous"></script>
  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>


</head>

<body class="hold-transition sidebar-mini">

  <!--<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Bienvenido 
  showConfirmButton: false,
  timer: 1500
})
</script>-->

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">SISTEMA DE COMPRAS</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4"
    style=" border-right: 2px solid #ddd; box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);">
      <!-- Brand Logo -->
      <a href="<?php echo $URL; ?>" class="brand-link" style="display: flex; align-items: center;margin-left: 10px;">
        <img src="<?php echo $URL; ?>/public/images/logo-amarillo.png" alt="" width="50px" style="opacity: .8">
        <span class="brand-text font-weight-bold" style="display: block; text-align: center; margin-left: 20px;"> SISTEMA DE<br>COMPRAS</span>
      </a> 

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo $URL; ?>/public/images/avatar2.png"
              class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php echo $nombres_sesion; ?>
              
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if ($id_tipo_usuario==1) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Usuarios  
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/usuarios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creacion de usuarios</p>
                  </a>
                </li>
              </ul>
            </li>
            <?php endif; ?>



            <?php if ($id_tipo_usuario==1) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-id-card-clip"></i>
                <p>
                  Tipos de usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/tipo_usuario" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de tipos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/tipo_usuario/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creacion de tipos</p>
                  </a>
                </li>
              </ul>
            </li>

            <?php endif; ?>

            <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tags"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/categorias/index_bienes.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categorias de bienes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/categorias/index_servicios.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categorias de servicios</p>
                  </a>
                </li>
              </ul>
            </li>
            <?php endif; ?>


            <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Bienes y servicios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Bienes
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo $URL; ?>/bienes_servicios/index_bienes.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Listado de bienes</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo $URL; ?>/bienes_servicios/create_bs.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Creacion de bienes</p>
                      </a>
                    </li>
                  </ul>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Servicios
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo $URL; ?>/bienes_servicios/index_servicios.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Listado de servicios</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo $URL; ?>/bienes_servicios/create_servicios.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Creacion de servicios</p>
                      </a>
                    </li>
                  </ul>
              </ul>
            </li>
            <?php endif; ?>


            <?php if ($id_tipo_usuario==1) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-money-bill"></i>
                <p>
                  Unidades
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/unidades/index_medidas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Unidades de medidas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/unidades/index_monedas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tipos de monedas</p>
                  </a>
                </li>
              </ul>
            </li>

            <?php endif; ?>


            <?php if ($id_tipo_usuario==1) : ?>


            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Proveedores
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/proveedores" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de proveedores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/proveedores/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Creacion de proveedores</p>
                  </a>
                </li>
              </ul>
            </li>

            <?php endif; ?>



            <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Compras
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/mov_compra/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de compras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/mov_compra/create_mv_bien.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compra de bienes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/mov_compra/create_mv_servicio.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compra de servicios</p>
                  </a>
                </li>
              </ul>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link">
              <i class="nav-icon fas fa-right-from-bracket" style="color: red;"></i>
                <p style="color: red;">
                  Cerrar sesión
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>