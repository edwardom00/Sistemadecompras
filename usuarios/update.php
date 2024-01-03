<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/usuarios/update_usuario.php');
include ('../app/controllers/tipo_usuario/listado_de_tipos.php'); 
include ('../app/controllers/sexo/listado_de_sexos.php'); 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Actualizar datos del empleado</h1>
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
              <h3 class="card-title">Datos personales</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                
              <form action="../app/controllers/usuarios/update.php" method="post">
                <input type="text" name="id_empleado" value="<?php echo $id_empleado_get;?>"hidden>
                  <div class="form-group">
                    <label for ="">Nombres</label>
                    <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" placeholder="Escriba sus nombres completos">
                  </div>
                  <div class="form-group">
                    <label for ="">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos;?>" placeholder="Escriba sus apellidos completos">
                  </div>
                  <div class="form-group">
                    <label for ="">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" value="<?php echo $fecha_nac;?>" placeholder="Ingrese su fecha de nacimiento">
                    </div>
                  <div class="form-group">
                    <label for="">Sexo</label>
                    <select name="descripcion_sexo" class="form-control" required>
                      <?php
                      foreach($sexo_datos as $sexo_dato) {
                            $sexo_tabla = $sexo_dato['descripcion_sexo'];
                            $id_sexo = $sexo_dato['id_sexo'];?>
                            <option value="<?php echo $id_sexo;?>"
                            <?php
                            if($sexo_tabla == $descripcion_sexo){?>
                                selected="selected";
                            <?php }
                            ?>
                            ><?php echo $sexo_tabla;?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Tipo de usuario</label>
                    <select name="des_tipo_usuario" class="form-control" required>
                      <?php
                      foreach($tipos_datos as $tipos_dato) {
                            $tipo_tabla = $tipos_dato['des_tipo_usuario'];
                            $id_tipo_usuario = $tipos_dato['id_tipo_usuario'];?>
                            <option value="<?php echo $id_tipo_usuario;?>"
                            <?php
                            if($tipo_tabla == $des_tipo_usuario){?>
                                selected="selected";
                            <?php }
                            ?>
                            ><?php echo $tipo_tabla;?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" value="<?php echo $direccion;?>" placeholder="Ingrese su dirección">
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo" class="form-control" value="<?php echo $ubigeo;?>" placeholder="Ingrese su ubigeo">
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono" class="form-control" value="<?php echo $telefono;?>" placeholder="Ingrese su numero telefonico">
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Ingrese su correo electronico">
                  </div>
                  <div class="form-group">
                    <label for ="">Contraseña</label>
                    <input type="text" name="contrasena" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for ="">Repita la contraseña</label>
                    <input type="text" name="contrasena_repetido" class="form-control">
                  </div>
                  <hr>
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