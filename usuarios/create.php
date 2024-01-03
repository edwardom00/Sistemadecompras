<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
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
            <h1 class="m-0">Registro de usuario</h1>
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
              <h3 class="card-title">Ingrese sus datos</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                <form action="../app/controllers/usuarios/create.php" method="post">
                  <div class="form-group">
                    <label for ="">Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Escriba sus nombres completos" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Escriba sus apellidos completos" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nac" class="form-control" placeholder="Ingrese su fecha de nacimiento" required>
                  </div>
                  <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select name="id_sexo" class="form-control" required>
                      <?php
                      foreach($sexo_datos as $sexo_dato) {?>
                            <option value="<?php echo $sexo_dato['id_sexo'];?>"><?php echo $sexo_dato['descripcion_sexo'];?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tipo_usuario">Tipo de usuario</label>
                    <select name="id_tipo_usuario" class="form-control" required>
                      <?php
                      foreach($tipos_datos as $tipos_dato) {?>
                            <option value="<?php echo $tipos_dato['id_tipo_usuario'];?>"><?php echo $tipos_dato['des_tipo_usuario'];?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" placeholder="Ingrese su dirección" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo" class="form-control" placeholder="Ingrese su ubigeo" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono" class="form-control" placeholder="Ingrese su numero telefonico" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electronico" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Contraseña</label>
                    <input type="text" name="contrasena" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Repita la contraseña</label>
                    <input type="text" name="contrasena_repetido" class="form-control" required>
                  </div>
                  <hr>
                  <div class="form-group">
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class ="btn btn-primary">Guardar</button>
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