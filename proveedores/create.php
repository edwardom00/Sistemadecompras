<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/tipo_bien_servicio/tipo_bien_servicio.php'); 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registro de proveedores</h1>
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
              <h3 class="card-title">Ingrese los datos</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                <form action="../app/controllers/proveedores/create.php" method="post">
                  <div class="form-group">
                    <label for ="">Ruc</label>
                    <input type="number" name="ruc_prov" class="form-control" placeholder="Ingrese el ruc de la empresa" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Nombre</label>
                    <input type="text" name="nombre_prov" class="form-control" placeholder="Ingrese el nombre de la empresa" required>
                  </div>
        
    
                  <div class="form-group">
                    <label for="tipo_bien_servicio">Tipo</label>
                    <select name="id_tipo_bien_servicio" class="form-control" required>
                      <?php
                      foreach($tipo_bien_servicio_datos as $tipo_bien_servicio_dato) {?>
                            <option value="<?php echo $tipo_bien_servicio_dato['id_tipo_bien_servicio'];?>"><?php echo $tipo_bien_servicio_dato['des_tipo_bien_servicio'];?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion_prov" class="form-control" placeholder="Ingrese la dirección del proveedor" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo_prov" class="form-control" placeholder="Ingrese su ubigeo" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono_prov" class="form-control" placeholder="Ingrese número de contacto" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="correo_prov" class="form-control" placeholder="Ingrese correo del proveedor" required>
                  </div>
                  
                  <div class="form-group">
                    <label for ="">Banco</label>
                    <input type="text" name="banco_prov" class="form-control" placeholder="Ingrese el banco con el cual trabaja el proveedor" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta bancaria</label>
                    <input type="number" name="cuenta_prov" class="form-control" placeholder="Ingrese la cuenta bancaria del proveedor" required>
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta interbancaria</label>
                    <input type="number" name="cci_prov" class="form-control" placeholder="Ingrese la cuenta interbancaria del proveedor" required>
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