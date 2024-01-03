<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/categorias/categorias_bienes.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Categorias de bienes</h1>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus"></i> Nueva categoria
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Categorias registradas</h3>
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
                                            <center>Categoria</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>

                                <body>
                                    <?php
                                    $contador = 0;

                                    foreach ($categorias_datos as $categorias_dato) {
                                        $id_categoria = $categorias_dato['id_categoria'];
                                        $des_categoria = $categorias_dato['des_categoria']; ?>
                                        <tr>
                                            <td>
                                                <center>
                                                    <?php echo $contador = $contador + 1; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $categorias_dato['id_tipo_bien_servicio']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <?php echo $categorias_dato['des_categoria']; ?>
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="update.php?id=<?php echo $id_categoria; ?>" type="button"
                                                            class="btn btn-success" data-toggle="modal"
                                                            data-target="#modal-update<?php echo $id_categoria; ?>">
                                                            <i class="fa fa-pencil-alt"></i>
                                                            Editar</button></a>
                                                        <a href="delete.php?id=<?php echo $id_categoria; ?>" type="button"
                                                            class="btn btn-danger" data-toggle="modal"
                                                            data-target="#modal-delete<?php echo $id_categoria; ?>">
                                                            <i class="fa fa-trash"></i>
                                                            Borrar</button></a>
                                                    </div>
                                                    <!-- /.modal para actualizar categorias -->
                                                    <div class="modal fade" id="modal-update<?php echo $id_categoria; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #116f4a; color: white">
                                                                    <h4 class="modal-title">Actualizar categoria de bienes
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
                                                                                <label for="">Descripcion de la
                                                                                    categoria</label>
                                                                                <input type="text"
                                                                                    id="des_categoria<?php echo $id_categoria; ?>"
                                                                                    value="<?php echo $des_categoria; ?>"
                                                                                    class="form-control">
                                                                                <small style="color : red; display : none"
                                                                                    id="lbl_update<?php echo $id_categoria; ?>">*
                                                                                    Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-success"
                                                                        id="btn_update<?php echo $id_categoria; ?>">Actualizar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_update<?php echo $id_categoria; ?>').click(function () {
                                                            //alert("guardar");
                                                            var des_categoria = $('#des_categoria<?php echo $id_categoria; ?>').val();
                                                            var id_categoria = '<?php echo $id_categoria; ?>';
                                                            if (des_categoria == "") {
                                                                $('#des_categoria<?php echo $id_categoria; ?>').focus();
                                                                $('#lbl_update<?php echo $id_categoria; ?>').css('display', 'block');
                                                            } else {
                                                                var url = "../app/controllers/categorias/update_cat_bienes.php";
                                                                $.post(url, { des_categoria: des_categoria, id_categoria: id_categoria }, function (datos) {
                                                                    $('#respuesta_update<?php echo $id_categoria; ?>').html(datos);
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_categoria; ?>"></div>

                                                    <!-- /.modal para eliminar categorias -->
                                                    <div class="modal fade" id="modal-delete<?php echo $id_categoria; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #e60e35; color: white">
                                                                    <h4 class="modal-title">Eliminar categoria de bienes
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
                                                                                <label for="">Descripcion de la
                                                                                    categoria</label>
                                                                                <input type="text"
                                                                                    id="des_categoria<?php echo $id_categoria; ?>"
                                                                                    value="<?php echo $des_categoria; ?>"
                                                                                    class="form-control" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        id="btn_delete<?php echo $id_categoria; ?>">Eliminar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_delete<?php echo $id_categoria; ?>').click(function () {
                                                            //alert("guardar");
                                                            var des_categoria = $('#des_categoria<?php echo $id_categoria; ?>').val();
                                                            var id_categoria = '<?php echo $id_categoria; ?>';
                                                            var url = "../app/controllers/categorias/delete_cat_bienes.php";
                                                            $.post(url, { des_categoria: des_categoria, id_categoria: id_categoria }, function (datos) {
                                                                $('#respuesta_delete<?php echo $id_categoria; ?>').html(datos);
                                                            });
                                                        });
                                                    </script>
                                                    <div id="respuesta_delete<?php echo $id_categoria; ?>"></div>
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
                                            <center>Categoria</center>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorias",
                "infoEmpty": "Mostrando 0 to 0 of 0 Categorias",
                "infoFiltered": "(Filtrado de _MAX_ total Categorias)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Categorias",
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


<!-- /.modal para registrar categorias -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear categoria de bienes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Descripcion de la categoria</label>
                            <input type="text" id="des_categoria" class="form-control">
                            <small style="color : red; display : none" id="lbl_create">* Este campo es requerido</small>
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
        var des_categoria = $('#des_categoria').val();

        if (des_categoria == "") {
            $('#des_categoria').focus();
            $('#lbl_create').css('display', 'block');
        } else {
            var url = "../app/controllers/categorias/registro_cat_bienes.php";
            $.post(url, { des_categoria: des_categoria }, function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>
<div id="respuesta"></div>