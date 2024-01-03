<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/usuarios/show_usuario.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Elminar información del empleado</h1>
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
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">¿Está seguro de eliminar la información del empleado?</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
              <form action="../app/controllers/usuarios/delete_usuario.php" method="post"> 
              <input type="text" name="id_empleado" value="<?php echo $id_empleado_get;?>"hidden>               
                  <div class="form-group">
                    <label for ="">Nombres</label>
                    <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" disabled> 
                  </div>
                  <div class="form-group">
                    <label for ="">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos;?>" disabled> 
                  </div>
                  <div class="form-group">
                    <label for ="">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" value="<?php echo $fecha_nac;?>" disabled> 
                  </div>
                  <div class="form-group">
                    <label for="">Sexo</label>
                    <input type="text" name="id_sexo" class="form-control" value="<?php echo $descripcion_sexo;?>" disabled> 
                  </div>
                  <div class="form-group">
                    <label for="">Tipo de usuario</label>
                    <input type="text" name="des_tipo_usuario" class="form-control" value="<?php echo $des_tipo_usuario;?>" disabled> 
                  </div>
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="<?php echo $direccion;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo" class="form-control" value="<?php echo $ubigeo;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono" class="form-control" value="<?php echo $telefono;?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                  <hr>
                  <div class="form-group">
                    <a href="index.php" class="btn btn-secondary">Volver</a>
                    <button class="btn btn-danger">Eliminar</button>
                    
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