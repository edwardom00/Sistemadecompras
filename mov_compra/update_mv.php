<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/mov_compra/update_mv.php');
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
          <h1 class="m-0">Actualizar comprobante de bien</h1>
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
              <h3 class="card-title">Datos del comprobante</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>

            </div>

            <div class="card-body" style="display: block;">
              <div class="col-md-12">

                <form action="../app/controllers/mov_compra/update.php" method="post">
                  <input type="text" name="id_compra" value="<?php echo $id_compra_get; ?>" hidden>
                  <div class="row">
                  <div class="col-md-9">
                  <div class="row">

                  <div class="col-md-2">
                  
                  <div class="form-group">
                    <label for="">Codigo</label>
                    <input type="text" name="codigo" class="form-control" value="<?php echo $codigo; ?>" disabled>
                  </div>
                  <div class="form-goup">
                    <label for="documentos">Documento</label>
                    <select name="id_documento" class="form-control" required>
                      <?php
                      foreach ($documento_datos as $documento_dato) {
                        $documento_tabla = $documento_dato['descripcion_doc'];
                        $id_documento = $documento_dato['id_documento']; ?>
                        <option value="<?php echo $id_documento; ?>" <?php
                           if ($documento_tabla == $descripcion_doc) { ?>
                            selected="selected" ; <?php }
                           ?>>
                          <?php echo $documento_tabla; ?>
                        </option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Cod. de comprobante</label>
                    <input type="text" name="codigo_comprobante" class="form-control"
                      value="<?php echo $codigo_comprobante; ?>">
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="">Nro de comprobante</label>
                      <input type="number" name="num_comprobante" class="form-control"
                        value="<?php echo $num_comprobante; ?>">
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="des_mov_compra" class="form-control"
                          value="<?php echo $des_mov_compra; ?>">
                      </div>
                      <div class="form-goup">
                        <label for="">Fecha de compra:</label>
                        <input type="date" name="fecha_compra" class="form-control"
                          value="<?php echo $fecha_compra; ?>">
                      </div>
                      <div class="form-goup">
                        <label for="">Fecha de pago:</label>
                        <input type="date" name="fecha_pago" class="form-control" value="<?php echo $fecha_pago; ?>">
                      </div>

                      <div class="form-group">
                        <label for="">Metodo de pago:</label>
                        <input type="text" name="metodo_pago" class="form-control" value="<?php echo $metodo_pago; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Estado de pago</label>
                        <input type="text" name="estado_pago" class="form-control" value="<?php echo $estado_pago; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Subtotal</label>
                        <input type="number" name="subtotal" class="form-control" value="<?php echo $subtotal; ?>"
                          placeholder="Ingrese su numero telefonico">
                      </div>
                      <div class="form-group">
                        <label for="">Impuestos</label>
                        <input type="float" name="impuestos" class="form-control" value="<?php echo $impuestos; ?>"
                          placeholder="Ingrese su correo electronico">
                      </div>
                      <div class="form-group">
                        <label for="">Descuentos</label>
                        <input type="number" name="descuentos" class="form-control" value="<?php echo $descuentos; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Monto total</label>
                        <input type="number" name="monto_total" class="form-control"
                          value="<?php echo $monto_total; ?>">
                      </div>
                      <div class="form-goup">
                        <label for="monedas">Moneda</label>
                        <select name="id_moneda" class="form-control" required>
                          <?php
                          foreach ($monedas_datos as $monedas_dato) {
                            $monedas_tabla = $monedas_dato['descripcion_mon'];
                            $id_moneda = $monedas_dato['id_moneda']; ?>
                            <option value="<?php echo $id_moneda; ?>" <?php
                               if ($monedas_tabla == $descripcion_mon) { ?>
                                selected="selected" ; <?php }
                               ?>>
                              <?php echo $monedas_tabla; ?>
                            </option>
                            <?php
                          }
                          ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="">Actualizar comprobante:</label>
                        <input type="file" name="comprobante" class="form-control" id="file" accept=".pdf">
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

                      <hr>
                      <div class="form-group">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
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