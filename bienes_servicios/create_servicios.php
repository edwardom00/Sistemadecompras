<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/bienes_servicios/listado_de_servicios.php');
include('../app/controllers/unidades/unidades_servicios.php');
//include('../app/controllers/categorias/categorias_bienes.php');
include('../app/controllers/categorias/categorias_servicios.php');
//include('../app/controllers/unidades/unidades_de_medida.php');
include('../app/controllers/unidades/tipos_de_monedas.php');
include('../app/controllers/proveedores/prov_servicios.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro del servicio</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese los datos del servicio</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="col-md-12">
                                <form action="../app/controllers/bienes_servicios/create_servicios.php" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-goup">
                                                        <label for="">Codigo:</label>
                                                        <?php
                                                        function ceros($numero)
                                                        {
                                                            $len = 0;
                                                            $cantidad_ceros = 5;
                                                            $aux = $numero;
                                                            $pos = strlen($numero);
                                                            $len = $cantidad_ceros - $pos;
                                                            for ($i = 0; $i < $len; $i++) {
                                                                $aux = "0" . $aux;
                                                            }
                                                            return $aux;
                                                        }
                                                        $contador_de_id_bien = 1;
                                                        foreach ($bienes_servicios_datos as $bienes_servicios_dato) {
                                                            $contador_de_id_bien = $contador_de_id_bien + 1;
                                                        }
                                                        ?>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo "S-" . ceros($contador_de_id_bien); ?>"
                                                            disabled>
                                                        <input type="text" name="codigo"
                                                            value="<?php echo "S-" . ceros($contador_de_id_bien); ?>"
                                                            hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Nombre del servicio:</label>
                                                        <input type="text" name="nombre" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Categoria:</label>
                                                        <div style="display:flex">
                                                            <div id="categoria-container">
                                                                <select name="id_categoria" id="id_categoria"
                                                                    class="form-control" required>
                                                                    <?php
                                                                    foreach ($categorias_datos as $categorias_dato) { ?>
                                                                        <option
                                                                            value="<?php echo $categorias_dato['id_categoria']; ?>">
                                                                            <?php echo $categorias_dato['des_categoria']; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <a href="<?php echo $URL; ?>/categorias/index_servicios.php"
                                                                class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Fecha de contratacion:</label>
                                                        <input type="date" name="fecha_ingreso" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-goup">
                                                        <label for="">Descripcion:</label>
                                                        <textarea type="text" name="descripcion" id="" cols="30"
                                                            rows="2" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="">Proveedor:</label>
                                                        <div style="display:flex">
                                                            <div id="proveedor-container">
                                                                <select name="id_proveedor" id="id_proveedor"
                                                                    class="form-control" required>
                                                                    <?php
                                                                    foreach ($prov_datos as $prov_dato) { ?>
                                                                        <option
                                                                            value="<?php echo $prov_dato['id_proveedor']; ?>">
                                                                            <?php echo $prov_dato['nombre_prov']; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <?php if ($id_tipo_usuario == 1): ?>
                                                                <a href="<?php echo $URL; ?>/proveedores/create.php"
                                                                    class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Unidad de medida:</label>
                                                        <div style="display:flex">
                                                            <select name="id_medida" id="" class="form-control"
                                                                required>
                                                                <?php
                                                                foreach ($medidas_datos as $medidas_dato) { ?>
                                                                    <option
                                                                        value="<?php echo $medidas_dato['id_medida']; ?>">
                                                                        <?php echo $medidas_dato['descripcion_med']; ?>
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
                                                    <div class="form-goup">
                                                        <label for="">Costo:</label>
                                                        <input type="number" name="costo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Moneda:</label>
                                                        <div style="display:flex">
                                                            <select name="id_moneda" id="" class="form-control"
                                                                required>
                                                                <?php
                                                                foreach ($monedas_datos as $monedas_dato) { ?>
                                                                    <option
                                                                        value="<?php echo $monedas_dato['id_moneda']; ?>">
                                                                        <?php echo $monedas_dato['descripcion_mon']; ?>
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
                                                <div class="col-md-4">
                                                    <div class="form-goup">
                                                        <label for="">Empleado:</label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $email_sesion; ?>" disabled>
                                                        <input type="text" name="id_empleado"
                                                            value="<?php echo $id_empleado_sesion; ?>" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-goup">
                                                <label for="">Imagen:</label>
                                                <input type="file" name="image" class="form-control" id="file">
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


                                    <hr>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
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