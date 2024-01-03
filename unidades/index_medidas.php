<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/tipo_bien_servicio/tipo_bien_servicio.php');
include('../app/controllers/unidades/unidades_de_medida.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Unidades de medida</h1>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-bienes">
                        <i class="fa fa-plus"></i> Medida de bienes
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-servicios">
                        <i class="fa fa-plus"></i> Medida de servicios
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
                            <h3 class="card-title">Unidades de medida registradas</h3>
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
                                            <center>Tipo</center>
                                        </th>
                                        <th>
                                            <center>Unidad de medida</center>
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

                                    foreach ($medidas_datos as $medidas_dato) {
                                        $id_medida = $medidas_dato['id_medida'];
                                        $id_tipo_bien_servicio = $medidas_dato['id_tipo_bien_servicio'];
                                        $descripcion_med = $medidas_dato['descripcion_med'];
                                        $abreviatura_med = $medidas_dato['abreviatura_med']; ?>
                                        <tr>
                                            <td>
                                                <center>
                                                    <?php echo $contador = $contador + 1; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $medidas_dato['des_tipo_bien_servicio']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $medidas_dato['descripcion_med']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $medidas_dato['abreviatura_med']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="update.php?id=<?php echo $id_medida; ?>" type="button"
                                                            class="btn btn-success" data-toggle="modal"
                                                            data-target="#modal-update<?php echo $id_medida; ?>">
                                                            <i class="fa fa-pencil-alt"></i>
                                                            Editar</button></a>
                                                        <a href="delete.php?id=<?php echo $id_medida; ?>" type="button"
                                                            class="btn btn-danger" data-toggle="modal"
                                                            data-target="#modal-delete<?php echo $id_medida; ?>">
                                                            <i class="fa fa-trash"></i>
                                                            Borrar</button></a>
                                                    </div>
                                                    <!-- /.modal para actualizar medidas -->
                                                    <div class="modal fade" id="modal-update<?php echo $id_medida; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #116f4a; color: white">
                                                                    <h4 class="modal-title">Actualizar unidad de medida
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
                                                                          
                                                                                <label for="">Unidad de medida</label>
                                                                                <input type="text"
                                                                                    id="descripcion_med<?php echo $id_medida; ?>"
                                                                                    value="<?php echo $descripcion_med; ?>"
                                                                                    class="form-control">
                                                                                <small style="color : red; display : none"
                                                                                    id="lbl_update_descripcion<?php echo $id_medida; ?>">*
                                                                                    Este campo es requerido</small>
                                                                                <label for="">Abreviatura</label>
                                                                                <input type="text"
                                                                                    id="abreviatura_med<?php echo $id_medida; ?>"
                                                                                    value="<?php echo $abreviatura_med; ?>"
                                                                                    class="form-control">
                                                                                <small style="color : red; display : none"
                                                                                    id="lbl_update_abreviatura<?php echo $id_medida; ?>">*
                                                                                    Este campo es requerido</small>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-success"
                                                                        id="btn_update<?php echo $id_medida; ?>">Actualizar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_update<?php echo $id_medida; ?>').click(function () {
                                                            //alert("guardar");
                                                            var descripcion_med = $('#descripcion_med<?php echo $id_medida; ?>').val();
                                                            var abreviatura_med = $('#abreviatura_med<?php echo $id_medida; ?>').val();
                                                   
                                                            var id_medida = '<?php echo $id_medida; ?>';

                                                            if (descripcion_med == "" && abreviatura_med == "") {
                                                                $('#descripcion_med<?php echo $id_medida; ?>').focus();
                                                                $('#abreviatura_med<?php echo $id_medida; ?>').focus();
                                                                $('#lbl_update_descripcion<?php echo $id_medida; ?>').css('display',
                                                                    'block');
                                                                $('#lbl_update_abreviatura<?php echo $id_medida; ?>').css('display',
                                                                    'block');
                                                            } else {
                                                                var url = "../app/controllers/unidades/update_medidas.php";
                                                                $.post(url, {
                                                                    descripcion_med: descripcion_med, abreviatura_med:
                                                                        abreviatura_med, id_medida: id_medida
                                                                }, function (datos) {
                                                                    $('#respuesta_update<?php echo $id_medida; ?>').html(datos);
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_medida; ?>"></div>

                                                    <!-- /.modal para eliminar medidas -->
                                                    <div class="modal fade" id="modal-delete<?php echo $id_medida; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #e60e35; color: white">
                                                                    <h4 class="modal-title">Eliminar unidad de medida
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
                                                                                <label for="">Unidad de medida</label>
                                                                                <input type="text"
                                                                                    id="descripcion_med<?php echo $id_medida; ?>"
                                                                                    value="<?php echo $descripcion_med; ?>"
                                                                                    class="form-control" disabled>
                                                                                <label for="">Abreviatura</label>
                                                                                <input type="text"
                                                                                    id="abreviatura_med<?php echo $id_medida; ?>"
                                                                                    value="<?php echo $abreviatura_med; ?>"
                                                                                    class="form-control" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        id="btn_delete<?php echo $id_medida; ?>">Eliminar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_delete<?php echo $id_medida; ?>').click(function () {
                                                            //alert("guardar");
                                                            var descripcion_med = $('#descripcion_med<?php echo $id_medida; ?>').val();
                                                            var abreviatura_med = $('#abreviatura_med<?php echo $id_medida; ?>').val();
                                                        
                                                            var id_medida = '<?php echo $id_medida; ?>';
                                                            var url = "../app/controllers/unidades/delete_medidas.php";
                                                            $.post(url, {
                                                                descripcion_med: descripcion_med, abreviatura_med:
                                                                    abreviatura_med, id_medida: id_medida
                                                            }, function (datos) {
                                                                $('#respuesta_delete<?php echo $id_medida; ?>').html(datos);
                                                            });
                                                        });
                                                    </script>
                                                    <div id="respuesta_delete<?php echo $id_medida; ?>"></div>
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
                                            <center>Tipo</center>
                                        </th>
                                        <th>
                                            <center>Unidad de medida</center>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Medidas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Medidas",
                "infoFiltered": "(Filtrado de _MAX_ total Medidas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Medidas",
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


<!-- /.modal para registrar medidas de bienes -->
<div class="modal fade" id="modal-create-bienes">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear unidad de medida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Unidad de medida</label>
                            <input type="text" id="descripcion_med" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_descripcion">* Este campo es
                                requerido</small>
                            <label for="">Abreviatura</label>
                            <input type="text" id="abreviatura_med" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_abreviatura">* Este campo es
                                requerido</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create_bienes">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('#btn_create_bienes').click(function () {
        var descripcion_med = $('#descripcion_med').val();
        var abreviatura_med = $('#abreviatura_med').val();

        if (descripcion_med == "" && abreviatura_med == "") {
            $('#descripcion_med').focus();
            $('#abreviatura_med').focus();
            $('#lbl_create_descripcion').css('display', 'block');
            $('#lbl_create_abreviatura').css('display', 'block');
        } else {
            var url = "../app/controllers/unidades/registro_medidas_bienes.php";
            $.post(url, { descripcion_med: descripcion_med, abreviatura_med: abreviatura_med }, function (datos) {
                $('#respuesta-bienes').html(datos);
            });
        }
    });
</script>
<div id="respuesta-bienes"></div>


<!-- /.modal para registrar medidas de servicios -->
<div class="modal fade" id="modal-create-servicios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear unidad de medida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Unidad de medida</label>
                            <input type="text" id="descripcion_med_servicio" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_descripcion_servicio">* Este campo es
                                requerido</small>
                            <label for="">Abreviatura</label>
                            <input type="text" id="abreviatura_med_servicio" class="form-control">
                            <small style="color : red; display : none" id="lbl_create_abreviatura_servicio">* Este campo es
                                requerido</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create_servicios">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('#btn_create_servicios').click(function () {
        var descripcion_med = $('#descripcion_med_servicio').val();
        var abreviatura_med = $('#abreviatura_med_servicio').val();

        if (descripcion_med == "" && abreviatura_med == "") {
            $('#descripcion_med_servicio').focus();
            $('#abreviatura_med_servicio').focus();
            $('#lbl_create_descripcion_servicio').css('display', 'block');
            $('#lbl_create_abreviatura_servicio').css('display', 'block');
        } else {
            var url = "../app/controllers/unidades/registro_medidas_servicios.php";
            $.post(url, { descripcion_med: descripcion_med, abreviatura_med: abreviatura_med }, function (datos) {
                $('#respuesta-servicios').html(datos);
            });
        }
    });
</script>
<div id="respuesta-servicios"></div>