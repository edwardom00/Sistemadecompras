<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/proveedores/show_prov.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Información del proveedor</h1>
          </div><!-- /.col -->
            
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos:</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                
              <div class="form-group">
                    <label for ="">Ruc</label>
                    <input type="number" name="ruc_prov" class="form-control" value="<?php echo $ruc_prov;?>" disabled> 
                  </div>


                  <div class="form-group">
                    <label for ="">Nombre</label>
                    <input type="text" name="nombre_prov" class="form-control" value="<?php echo $nombre_prov;?>" disabled> 
                  </div>
                 
                  <div class="form-group">
                    <label for ="">Tipo de proveedor</label>
                    <input type="text" name="id_tipo_bien_servicio" class="form-control" value="<?php echo $des_tipo_bien_servicio;?>" disabled> 
                  </div>
            
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion_prov" class="form-control" value="<?php echo $direccion_prov;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo_prov" class="form-control" value="<?php echo $ubigeo_prov;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono_prov" class="form-control" value="<?php echo $telefono_prov;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="correo_prov" class="form-control" value="<?php echo $correo_prov;?>" disabled>
                 <div class="form-group">
                    <label for ="">Banco</label>
                    <input type="text" name="banco_prov" class="form-control" value="<?php echo $banco_prov;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta bancaria</label>
                    <input type="number" name="cuenta_prov" class="form-control" value="<?php echo $cuenta_prov;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta interbancaria</label>
                    <input type="number" name="cci_prov" class="form-control" value="<?php echo $cci_prov;?>" disabled>
                  </div>
                    <hr>
                  <div class="form-group">
                    <a href="index.php" class="btn btn-secondary">Volver</a>
                    
                  </div>

              </div>

            </div>

          </div>
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php');?>
<?php include ('../layout/parte2.php');?>