<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php'); 
include ('../app/controllers/proveedores/update_prov.php');
include ('../app/controllers/tipo_bien_servicio/tipo_bien_servicio.php'); 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Actualizar datos del proveedor</h1>
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
              <h3 class="card-title">Datos del proveedor</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">
                
              <form action="../app/controllers/proveedores/update.php" method="post">
                <input type="text" name="id_proveedor" value="<?php echo $id_proveedor_get;?>"hidden>
                <div class="form-group">
                    <label for ="">Ruc</label>
                    <input type="number" name="ruc_prov" class="form-control" value="<?php echo $ruc_prov;?>" placeholder="Ingrese el ruc de la empresa">
                  </div>
                  <div class="form-group">
                    <label for ="">Nombre</label>
                    <input type="text" name="nombre_prov" class="form-control" value="<?php echo $nombre_prov;?>" placeholder="Ingrese el nombre de la empresa">
                  </div>
        
    
                  <div class="form-group">
                    <label for="tipo_bien_servicio">Tipo</label>
                    <select name="id_tipo_bien_servicio" class="form-control" value="<?php echo $id_tipo_bien_servicio;?>">
                      <?php
                      foreach($tipo_bien_servicio_datos as $tipo_bien_servicio_dato) {
                            $tipo_bien_servicio_tabla = $tipo_bien_servicio_dato['des_tipo_bien_servicio'];
                            $id_tipo_bien_servicio= $tipo_bien_servicio_dato['id_tipo_bien_servicio'];?>
                            <option value="<?php echo $id_tipo_bien_servicio;?>"
                            <?php
                            if($tipo_bien_servicio_tabla == $des_tipo_bien_servicio){?>
                                selected="selected";
                            <?php }
                            ?>
                            ><?php echo $tipo_bien_servicio_tabla;?></option>
                      <?php
                      }    
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for ="">Dirección</label>
                    <input type="text" name="direccion_prov" class="form-control" value="<?php echo $direccion_prov;?>"placeholder="Ingrese la dirección del proveedor">
                  </div>
                  <div class="form-group">
                    <label for ="">Ubigeo</label>
                    <input type="number" name="ubigeo_prov" class="form-control" value="<?php echo $ubigeo_prov;?>" placeholder="Ingrese su ubigeo">
                  </div>
                  <div class="form-group">
                    <label for ="">Telefono</label>
                    <input type="number" name="telefono_prov" class="form-control" value="<?php echo $telefono_prov;?>" placeholder="Ingrese número de contacto" >
                  </div>
                  <div class="form-group">
                    <label for ="">Correo</label>
                    <input type="email" name="correo_prov" class="form-control" value="<?php echo $correo_prov;?>" placeholder="Ingrese correo del proveedor" >
                  </div>
                  
                  <div class="form-group">
                    <label for ="">Banco</label>
                    <input type="text" name="banco_prov" class="form-control" value="<?php echo $banco_prov;?>" placeholder="Ingrese el banco con el cual trabaja el proveedor">
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta bancaria</label>
                    <input type="number" name="cuenta_prov" class="form-control" value="<?php echo $cuenta_prov;?>" placeholder="Ingrese la cuenta bancaria del proveedor">
                  </div>
                  <div class="form-group">
                    <label for ="">Cuenta interbancaria</label>
                    <input type="number" name="cci_prov" class="form-control" value="<?php echo $cci_prov;?>" placeholder="Ingrese la cuenta interbancaria del proveedor">
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