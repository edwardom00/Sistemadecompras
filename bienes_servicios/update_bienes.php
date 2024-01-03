<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/bienes_servicios/update_bienes.php');
include('../app/controllers/bienes_servicios/listado_de_bienes.php');
include('../app/controllers/unidades/tipos_de_monedas.php');
include('../app/controllers/unidades/unidades_bienes.php');
include('../app/controllers/categorias/categorias_bienes.php');
include('../app/controllers/proveedores/prov_bienes.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar bien</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Actualice los datos del bien</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="col-md-12">
                                <form action="../app/controllers/bienes_servicios/update.php" method="post"
                                    enctype="multipart/form-data">
                                    <input type="text" name="id_bien_servicio" value="<?php echo $id_bien_servicio_get; ?>" hidden>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <!-- Code and Name -->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Codigo</label>
                                                    <input type="text" name="codigo" class="form-control"
                                                        value="<?php echo $codigo; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Nombre</label>
                                                    <input type="text" name="nombre" class="form-control"
                                                        value="<?php echo $nombre; ?>">
                                                </div>
                                            </div>
                                            <!-- Category and Acquisition Date -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="categorias">Categoria</label>
                                                    <div style="display:flex">
                                                    <select name="id_categoria" class="form-control">
                                                        <?php
                                                        foreach ($categorias_datos as $categorias_dato) {
                                                            $categoria_tabla = $categorias_dato['des_categoria'];
                                                            $id_categoria = $categorias_dato['id_categoria']; ?>
                                                            <option value="<?php echo $id_categoria; ?>" <?php
                                                               if ($categoria_tabla == $des_categoria) { ?> selected="selected" ; <?php }
                                                               ?>>
                                                                <?php echo $categoria_tabla; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <a href="<?php echo $URL; ?>/categorias/index_bienes.php"
                                                                class="btn btn-primary"><i class="fa fa-plus"></i></a>

                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Fecha de adquisicion:</label>
                                                    <input type="date" name="fecha_ingreso" class="form-control"
                                                        value="<?php echo $fecha_ingreso; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- Description -->
                                        <div class="row">
                                            <div class="col-md-9">
                                            <div class="form-group">
                                                <label for ="">Descripción:</label>
                                                <input type="text" name="descripcion"  cols="30" rows="2" class="form-control" value="<?php echo $descripcion;?>">
                                            </div>
                                            </div>
                                         <hr>

                                            <!-- Provider -->
                                        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Proveedor:</label>
                                                    <div style="display:flex">
                                                        <select name="id_proveedor" class="form-control">
                                                        <?php
                                                        foreach ($prov_datos as $prov_dato) {
                                                            $prov_tabla = $prov_dato['nombre_prov'];
                                                            $id_proveedor = $prov_dato['id_proveedor']; ?>
                                                            <option value="<?php echo $id_proveedor; ?>" <?php
                                                            if ($prov_tabla == $nombre_prov) { ?>
                                                                selected="selected" ; <?php }
                                                            ?>>
                                                            <?php echo $prov_tabla; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                        </select>
                                                    
                                                        <?php if ($id_tipo_usuario == 1): ?>
                                                            <a href="<?php echo $URL; ?>/proveedores/create.php"
                                                                class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        

                                        <!-- Measurement, Cost, Currency, and Employee -->
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Unidad de medida:</label>
                                                    <div style="display:flex">
                                                    <select name="id_medida" class="form-control">
                                                        <?php
                                                        foreach ($medidas_datos as $medidas_dato) {
                                                            $medidas_tabla = $medidas_dato['descripcion_med'];
                                                            $id_medida = $medidas_dato['id_medida']; ?>
                                                            <option value="<?php echo $id_medida; ?>" <?php
                                                               if ($medidas_tabla == $descripcion_med) { ?> selected="selected" ; <?php }
                                                               ?>>
                                                                <?php echo $medidas_tabla; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php if ($id_tipo_usuario == 1): ?>
                                                                <a href="<?php echo $URL; ?>/unidades/index_medidas.php"
                                                                    class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                            <?php endif; ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Costo:</label>
                                                    <input type="number" name="costo" class="form-control"
                                                        value="<?php echo $costo; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Moneda:</label>
                                                    <div style="display:flex">
                                                    <select name="id_moneda" class="form-control">
                                                        <?php
                                                        foreach ($monedas_datos as $monedas_dato) {
                                                            $monedas_tabla = $monedas_dato['descripcion_mon'];
                                                            $id_moneda = $monedas_dato['id_moneda']; ?>
                                                            <option value="<?php echo $id_moneda; ?>" <?php
                                                               if ($monedas_tabla == $descripcion_mon) { ?> selected="selected" ; <?php }
                                                               ?>>
                                                                <?php echo $monedas_tabla; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <?php if ($id_tipo_usuario == 1): ?>
                                                                <a href="<?php echo $URL; ?>/unidades/index_monedas.php"
                                                                    class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                            <?php endif; ?>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Empleado:</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $email_sesion; ?>" disabled>
                                                    <input type="text" name="id_empleado"
                                                        value="<?php echo $id_empleado_sesion; ?>" hidden>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-goup">
                                                    <label for=""> Actualizar Imagen:</label>
                                                    <input type="file" name="imagen" class="form-control" id="file">
                                                    <hr>
                                                    <output id="list"></output>
                                                    <script>
                                                        function archivo(evt) {
                                                            var files = evt.target.files; // FileList object
                                                            // Obtenemos la imagen del campo "file".
                                                            for (var i = 0, f; f = files[i]; i++) {
                                                                //Solo admitimos imágenes.
                                                                if (!f.type.match('image.*')) {
                                                                    continue;
                                                                }
                                                                var reader = new FileReader();
                                                                reader.onload = (function (theFile) {
                                                                    return function (e) {
                                                                        // Insertamos la imagen
                                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                    };
                                                                })(f);
                                                                reader.readAsDataURL(f);
                                                            }
                                                        }
                                                        document.getElementById('file').addEventListener('change', archivo, false);
                                                    </script>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                    </div>

                                    

                                    <hr>

                                    <!-- Submit Buttons -->
                                    <div class="form-group">
                                        <a href="index_bienes.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success">Actualizar</button>
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


<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>
