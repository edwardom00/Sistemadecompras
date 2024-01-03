<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/mov_compra/listado_de_movimientos.php');
include('../app/controllers/unidades/tipos_de_monedas.php');
include('../app/controllers/documentos/listado_de_documentos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro del comprobante de bien</h1>
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
                            <h3 class="card-title">Ingrese los datos del comprobante</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="col-md-12">
                                <form action="../app/controllers/mov_compra/create_mv_bien.php" method="post"
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
                                                        $contador_id_mov = 1;
                                                        foreach ($mov_compra_datos as $mov_compra_dato) {
                                                            $contador_id_mov = $contador_id_mov + 1;
                                                        }
                                                        ?>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo "MB-" . ceros($contador_id_mov); ?>"
                                                            disabled>
                                                        <input type="text" name="codigo"
                                                            value="<?php echo "MB-" . ceros($contador_id_mov); ?>"
                                                            hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Empleado:</label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $email_sesion; ?>" disabled>
                                                        <input type="text" name="id_empleado"
                                                            value="<?php echo $id_empleado_sesion; ?>" hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-goup">
                                                        <label for="">Documento:</label>
                                                        <div style="display:flex">
                                                            <select name="id_documento" id="" class="form-control"
                                                                required>
                                                                <?php
                                                                foreach ($documento_datos as $documento_dato) { ?>
                                                                    <option
                                                                        value="<?php echo $documento_dato['id_documento']; ?>">
                                                                        <?php echo $documento_dato['descripcion_doc']; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                                ?>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="form-goup">
                                                        <label for="">Cod. de comprobante:</label>
                                                        <input type="text" name="codigo_comprobante"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Nro de comprobante:</label>
                                                        <input type="number" name="num_comprobante" class="form-control"
                                                            required>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-goup">
                                                        <label for="">Descripcion:</label>
                                                        <textarea type="text" name="des_mov_compra" id="" cols="30"
                                                            rows="2" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Fecha de compra:</label>
                                                        <input type="date" name="fecha_compra" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Fecha de pago:</label>
                                                        <input type="date" name="fecha_pago" class="form-control"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="metodo_pago">Metodo de pago:</label>
                                                        <select name="metodo_pago" class="form-control" required>
                                                            <option value="tarjeta">Tarjeta de crédito</option>
                                                            <option value="transferencia">Transferencia bancaria
                                                            </option>
                                                            <option value="efectivo">Efectivo</option>
                                                            <!-- Agrega más opciones según sea necesario -->
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="estado_pago">Estado de pago:</label>
                                                        <select name="estado_pago" class="form-control" required>
                                                            <option value="pendiente">Pendiente</option>
                                                            <option value="pagado">Pagado</option>
                                                            <option value="cancelado">Cancelado</option>
                                                            <!-- Agrega más opciones según sea necesario -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>

                                            <div class="row">


                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Subtotal:</label>
                                                        <input type="number" id="subtotal" name="subtotal"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-goup">
                                                        <label for="">Impuestos(%):</label>
                                                        <input type="float" id="impuestos" name="impuestos"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-goup">
                                                        <label for="">Descuentos(%):</label>
                                                        <input type="number" id="descuentos" name="descuentos"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-goup">
                                                        <label for="">Monto total:</label>
                                                        <input type="float" id="monto_total" name="monto_total"
                                                            class="form-control" required>
                                                    </div>
                                                </div>

                                                <script>
                                                    // Obtener referencias a los elementos de entrada
                                                    var subtotalInput = document.getElementById('subtotal');
                                                    var impuestosInput = document.getElementById('impuestos');
                                                    var descuentosInput = document.getElementById('descuentos');
                                                    var montoTotalInput = document.getElementById('monto_total');

                                                    // Función para calcular el monto total
                                                    function calcularMontoTotal() {
                                                        var subtotal = parseFloat(subtotalInput.value) || 0;
                                                        var impuestos = parseFloat(impuestosInput.value) || 0;
                                                        var descuentos = parseFloat(descuentosInput.value) || 0;

                                                        var montoTotal = subtotal + subtotal * (impuestos / 100) - subtotal * (descuentos / 100);

                                                        // Actualizar el valor del campo de monto total
                                                        montoTotalInput.value = montoTotal.toFixed(2); // Ajustar a dos decimales si es necesario
                                                    }

                                                    // Asociar la función al evento de cambio en los campos relevantes
                                                    subtotalInput.addEventListener('input', calcularMontoTotal);
                                                    impuestosInput.addEventListener('input', calcularMontoTotal);
                                                    descuentosInput.addEventListener('input', calcularMontoTotal);
                                                </script>


                                                <div class="col-md-2">
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

                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Comprobante:</label>
                                                <input type="file" name="comprobante" class="form-control" id="file"
                                                    accept=".pdf">
                                                <hr>
                                                <div id="pdfViewer"></div>
                                                <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
                                                <script>
                                                    function archivo(evt) {
                                                        var files = evt.target.files;
                                                        for (var i = 0, f; f = files[i]; i++) {
                                                            var fileType = f.type;
                                                            var validFileTypes = ["application/pdf"];

                                                            if (validFileTypes.indexOf(fileType) === -1) {
                                                                alert("Tipo de archivo no admitido. Se admite solo PDF.");
                                                                continue;
                                                            }

                                                            var reader = new FileReader();
                                                            reader.onload = (function (theFile) {
                                                                return function (e) {
                                                                    // Mostrar el visor de PDF
                                                                    var pdfViewer = document.getElementById("pdfViewer");
                                                                    pdfViewer.innerHTML = '<iframe src="' + e.target.result + '" width="100%" height="400px"></iframe>';
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