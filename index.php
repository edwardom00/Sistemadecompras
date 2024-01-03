<?php
include('app/config.php');
include('layout/sesion.php');

include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/categorias/total_categorias.php');
include('app/controllers/bienes_servicios/listado_de_bs.php');
include('app/controllers/tipo_usuario/listado_de_tipos.php'); 
include('app/controllers/unidades/unidades_de_medida.php');
include('app/controllers/unidades/tipos_de_monedas.php');
include('app/controllers/mov_compra/listado_de_movimientos.php');
include('app/controllers/proveedores/listado_de_prov.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Bienvenido -
            <?php echo $tipo_sesion; ?>
          </h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <br>
      <div class="row">

      <?php if ($id_tipo_usuario==1) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-lightblue">
            <div class="inner">
              <?php
              $contador_de_usuarios = 0;
              foreach ($usuarios_datos as $usuarios_dato) {
                $contador_de_usuarios = $contador_de_usuarios + 1;
              }
              ?>
              <h3>
                <?php echo $contador_de_usuarios; ?>
              </h3>
              <p>Empleados Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/usuarios/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer">
              Mas informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <?php endif; ?>


        <?php if ($id_tipo_usuario==1) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-orange">
            <div class="inner">
              <?php
              $contador_de_tipos = 0;
              foreach ($tipos_datos as $tipos_dato) {
                $contador_de_tipos = $contador_de_tipos + 1;
              }
              ?>
              <h3>
                <?php echo $contador_de_tipos; ?>
              </h3>
              <p>Tipos de empleados</p>
            </div>
            <a href="<?php echo $URL; ?>/tipo_usuario/create.php">
              <div class="icon">
                <i class="fas fa-person-circle-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/tipo_usuario" class="small-box-footer">
              Mas informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <?php endif; ?>


        <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning" style="background-color: #f2b807; height: 142px">
            <div class="row justify-content-center align-items-center">
              <div class="col-6">
                <div class="inner">
                  <?php
                  $contador_de_categorias = 0;
                  foreach ($categorias_datos as $categorias_dato) {
                    $contador_de_categorias = $contador_de_categorias + 1;
                  }
                  ?>
                  <h3>
                    <?php echo $contador_de_categorias; ?>
                  </h3>
                  <p>Categorias de Bienes y Servicios</p>
                </div>
              </div>
              <div class="col-4">
                <div class="btn-group-vertical" style="bottom: -5px;">
                  <a href="<?php echo $URL; ?>/categorias/index_bienes.php"  class="btn btn-app bg-warning">
                    <i class="fas fa-shop"></i> + Bienes
                  </a>
                  <a href="<?php echo $URL; ?>/categorias/index_servicios.php" class="btn btn-app bg-warning">
                    <i class="fas fa-file-contract"></i> + Servicios
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>



        <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info" style="background-color: #36abcf; height: 142px">
            <div class="row justify-content-center align-items-center">
              <div class="col-6">
                <div class="inner">
                  <?php
                  $contador_de_bs = 0;
                  foreach ($bienes_servicios_datos as $bienes_servicios_dato) {
                    $contador_de_bs = $contador_de_bs + 1;
                  }
                  ?>
                  <h3>
                    <?php echo $contador_de_bs; ?>
                  </h3>
                  <p>Bienes y Servicios</p>
                </div>
              </div>
              <div class="col-4">
                <div class="btn-group-vertical" style="bottom: -5px;">
                  <a href="<?php echo $URL; ?>/bienes_servicios/create_bs.php"  class="btn btn-app bg-info" >
                    <i class="fas fa-shop"></i> + Bienes
                  </a>
                  <a href="<?php echo $URL; ?>/bienes_servicios/create_servicios.php" class="btn btn-app bg-info">
                    <i class="fas fa-file-contract"></i> + Servicios
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>




        <?php if ($id_tipo_usuario==1) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-purple">
            <div class="inner">
              <?php
              $contador_de_prov = 0;
              foreach ($prov_datos as $prov_dato) {
                $contador_de_prov = $contador_de_prov + 1;
              }
              ?>
              <h3>
                <?php echo $contador_de_prov; ?>
              </h3>
              <p>Proveedores</p>
            </div>
            <a href="<?php echo $URL; ?>/proveedores/create.php">
              <div class="icon">
                <i class="fas fa-person-circle-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer">
              Mas informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <?php endif; ?>


        <?php if ($id_tipo_usuario==1) : ?>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-light">
            <div class="inner">
              <?php
              $contador_de_medidas = 0;
              foreach ($medidas_datos as $medidas_dato) {
                $contador_de_medidas = $contador_de_medidas + 1;
              }
              ?>
              <h3>
                <?php echo $contador_de_medidas; ?>
              </h3>
              <p>Unidades de medida</p>
            </div>
            <a>
              <div class="icon">
                <i class="fas fa-scale-balanced"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/unidades/index_medidas.php" class="small-box-footer">
              Registro y listado <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <?php endif; ?>


        <?php if ($id_tipo_usuario==1) : ?>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-teal">
            <div class="inner">
              <?php
              $contador_de_monedas = 0;
              foreach ($monedas_datos as $monedas_dato) {
                $contador_de_monedas = $contador_de_monedas + 1;
              }
              ?>
              <h3>
                <?php echo $contador_de_monedas; ?>
              </h3>
              <p>Tipos de monedas</p>
            </div>
            <a>
              <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/unidades/index_monedas.php" class="small-box-footer">
              Registro y listado <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <?php endif; ?>

        <?php if ($id_tipo_usuario==1 || $id_tipo_usuario==2) : ?>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-lightblue" style="background-color: #f2b807; height: 142px">
            <div class="row justify-content-center align-items-center">
              <div class="col-6">
                <div class="inner">
                  <?php
                  $contador_de_mov_compra = 0;
                  foreach ($mov_compra_datos as $mov_compra_dato) {
                    $contador_de_mov_compra = $contador_de_mov_compra + 1;
                  }
                  ?>
                  <h3>
                    <?php echo $contador_de_mov_compra; ?>
                  </h3>
                  <p>Movimientos de bienes y servicios</p>
                </div>
              </div>
              <div class="col-4">
                <div class="btn-group-vertical" style="bottom: -5px;">
                  <a href="<?php echo $URL; ?>/mov_compra/create_mv_bien.php"  class="btn btn-app bg-lightblue">
                    <i class="fas fa-shop"></i> + Bienes
                  </a>
                  <a href="<?php echo $URL; ?>/mov_compra/create_mv_servicio.php" class="btn btn-app bg-lightblue">
                    <i class="fas fa-file-contract"></i> + Servicios
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>



      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include('layout/parte2.php');
?>