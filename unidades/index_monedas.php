<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/unidades/tipos_de_monedas.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tipos de monedas</h1>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus"></i> Nuevo tipo de moneda
                    </button>
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
                            <h3 class="card-title">Tipos de monedas registradas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Moneda</center>
                                        </th>
                                        <th>
                                            <center>Abreviatura</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>

                                <body>
                                    <?php
                                    $contador = 0;

                                    foreach ($monedas_datos as $monedas_dato) {
                                        $id_moneda = $monedas_dato['id_moneda'];
                                        $descripcion_mon = $monedas_dato['descripcion_mon'];
                                        $abreviatura_mon = $monedas_dato['abreviatura_mon']; ?>
                                        <tr>
                                            <td>
                                                <center>
                                                    <?php echo $contador = $contador + 1; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $monedas_dato['descripcion_mon']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $monedas_dato['abreviatura_mon']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="update.php?id=<?php echo $id_moneda; ?>" type="button"
                                                            class="btn btn-success" data-toggle="modal"
                                                            data-target="#modal-update<?php echo $id_moneda; ?>">
                                                            <i class="fa fa-pencil-alt"></i>
                                                            Editar</button></a>
                                                        <a href="delete.php?id=<?php echo $id_moneda; ?>" type="button"
                                                            class="btn btn-danger" data-toggle="modal"
                                                            data-target="#modal-delete<?php echo $id_moneda; ?>">
                                                            <i class="fa fa-trash"></i>
                                                            Borrar</button></a>
                                                    </div>
                                                    <!-- /.modal para actualizar monedas -->
                                                    <div class="modal fade" id="modal-update<?php echo $id_moneda; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #116f4a; color: white">
                                                                    <h4 class="modal-title">Actualizar tipo de moneda
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="">Tipo de moneda</label>
                                                                                <input type="text"
                                                                                    id="descripcion_mon<?php echo $id_moneda; ?>"
                                                                                    value="<?php echo $descripcion_mon; ?>"
                                                                                    class="form-control">
                                                                                <small style="color : red; display : none"
                                                                                    id="lbl_update_descripcion<?php echo $id_moneda; ?>">*
                                                                                    Este campo es requerido</small>
                                                                                <label for="">Abreviatura</label>
                                                                                <input type="text"
                                                                                    id="abreviatura_mon<?php echo $id_moneda; ?>"
                                                                                    value="<?php echo $abreviatura_mon; ?>"
                                                                                    class="form-control">
                                                                                <small style="color : red; display : none"
                                                                                    id="lbl_update_abreviatura<?php echo $id_moneda; ?>">*
                                                                                    Este campo es requerido</small>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-success"
                                                                        id="btn_update<?php echo $id_moneda; ?>">Actualizar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_update<?php echo $id_moneda; ?>').click(function () {
                                                            //alert("guardar");
                                                            var descripcion_mon = $('#descripcion_mon<?php echo $id_moneda; ?>').val();
                                                            var abreviatura_mon = $('#abreviatura_mon<?php echo $id_moneda; ?>').val();
                                                            var id_moneda = '<?php echo $id_moneda; ?>';
                                                            if (descripcion_mon == "" && abreviatura_mon == "") {
                                                                $('#descripcion_mon<?php echo $id_moneda; ?>').focus();
                                                                $('#abreviatura_mon<?php echo $id_moneda; ?>').focus();
                                                                $('#lbl_update_descripcion<?php echo $id_moneda; ?>').css('display',
                                                                    'block');
                                                                $('#lbl_update_abreviatura<?php echo $id_moneda; ?>').css('display',
                                                                    'block');
                                                            } else {
                                                                var url = "../app/controllers/unidades/update_monedas.php";
                                                                $.post(url, {
                                                                    descripcion_mon: descripcion_mon, abreviatura_mon:
                                                                        abreviatura_mon, id_moneda: id_moneda
                                                                }, function (datos) {
                                                                    $('#respuesta_update<?php echo $id_moneda; ?>').html(datos);
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_moneda; ?>"></div>

                                                    <!-- /.modal para eliminar monedas-->
                                                    <div class="modal fade" id="modal-delete<?php echo $id_moneda; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #e60e35; color: white">
                                                                    <h4 class="modal-title">Eliminar tipo de moneda
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="">Tipo de moneda</label>
                                                                                <input type="text"
                                                                                    id="descripcion_mon<?php echo $id_moneda; ?>"
                                                                                    value="<?php echo $descripcion_mon; ?>"
                                                                                    class="form-control" disabled>
                                                                                <label for="">Abreviatura</label>
                                                                                <input type="text"
                                                                                    id="abreviatura_mon<?php echo $id_moneda; ?>"
                                                                                    value="<?php echo $abreviatura_mon; ?>"
                                                                                    class="form-control" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        id="btn_delete<?php echo $id_moneda; ?>">Eliminar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_delete<?php echo $id_moneda; ?>').click(function () {
                                                            //alert("guardar");
                                                            var descripcion_mon = $('#descripcion_mon<?php echo $id_moneda; ?>').val();
                                                            var abreviatura_mon = $('#abreviatura_mon<?php echo $id_moneda; ?>').val();
                                                            var id_moneda = '<?php echo $id_moneda; ?>';
                                                            var url = "../app/controllers/unidades/delete_monedas.php";
                                                            $.post(url, { descripcion_mon: descripcion_mon, abreviatura_mon:
                                                                        abreviatura_mon, id_moneda: id_moneda }, function (datos) {
                                                                $('#respuesta_delete<?php echo $id_moneda; ?>').html(datos);
                                                            });
                                                        });
                                                    </script>
                                                    <div id="respuesta_delete<?php echo $id_moneda; ?>"></div>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php

                                    }
                                    ?>
                                </body>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Moneda</center>
                                        </th>
                                        <th>
                                            <center>Abreviatura</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
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

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Monedas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Monedas",
                "infoFiltered": "(Filtrado de _MAX_ total Modenas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Monedas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            /*buttons: [{
              extend: 'collection',
              text: 'Reportes',
              orientation: 'landscape',
              buttons:[{
                text: 'Copiar',
                extend: 'copy',
              },{
                extend: 'pdf'
              },{
                extend: 'csv',
              },{
                extend: 'excel',
              },{
                text: 'Imprimir',
                extend: 'print'
              }
              ]
            },
              {
                extend: 'colvis',
                text: 'Visor de columnas'
                collectionLayout: 'fixed three-column'
              }
          ],
          */
            //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            buttons: [{

                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf',
                }, {
                    extend: 'csv',
                }, {
                    extend: 'excel',
                }, {
                    text: 'Imprimir',
                    extend: 'print',
                }
                ]
            },
            {
                extend: 'colvis',
                text: 'Visor de columnas',
                collectionLayout: ' one-column'
            }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


<!-- /.modal para registrar monedas -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear tipo de moneda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Tipo de moneda</label>
                            <input type="text" id="descripcion_mon" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_descripcion">* Este campo es
                                requerido</small>
                            <label for="">Abreviatura</label>
                            <input type="text" id="abreviatura_mon" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_abreviatura">* Este campo es
                                requerido</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('#btn_create').click(function () {
        //alert("guardar");
        var descripcion_mon = $('#descripcion_mon').val();
        var abreviatura_mon = $('#abreviatura_mon').val();

        if (descripcion_mon == "" && abreviatura_mon == "") {
            $('#descripcion_mon').focus();
            $('#abreviatura_mon').focus();
            $('#lbl_create_descripcion').css('display', 'block');
            $('#lbl_create_abreviatura').css('display', 'block');
        } else {
            var url = "../app/controllers/unidades/registro_monedas.php";
            $.post(url, { descripcion_mon: descripcion_mon, abreviatura_mon: abreviatura_mon }, function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>
<div id="respuesta"></div>