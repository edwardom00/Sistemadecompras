<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/tipo_usuario/update_tipos.php'); 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Editar tipo de usuario</h1>
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
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Actualice los datos del tipo de usuario</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                <form action="../app/controllers/tipo_usuario/update.php" method="post">
                  <div class="form-group">
                    <input type="text" name="id_tipo_usuario" value="<?php echo $id_tipo_get;?>" hidden>
                    <label for ="">Nombre del Tipo de usuario</label>
                    <input type="text" name="des_tipo_usuario" class="form-control" placeholder="Escriba el nombre del tipo de usuario" value="<?php echo $des_tipo_usuario;?>" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Abreviatura</label>
                    <input type="text" name="abr_tipo_usuario" class="form-control" placeholder="Escriba la abreviatura" value="<?php echo $abr_tipo_usuario;?>" required>
                  </div>
                  <div class="form-group">
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class ="btn btn-success">Actualizar</button>
                  </div>
                </form>
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