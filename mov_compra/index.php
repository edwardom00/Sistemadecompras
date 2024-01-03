<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/mov_compra/listado_de_movimientos.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de movimientos de compra</h1>
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
                            <h3 class="card-title">Movimientos de compra registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block; overflow-x: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Codigo</center>
                                        </th>
                                        <th>
                                            <center>Tipo</center>
                                        </th>
                                        <th>
                                            <center>Documento</center>
                                        </th>
                                        <th>
                                            <center>Cod. Comprobante</center>
                                        </th>
                                        <th>
                                            <center>Nro Comprobante</center>
                                        </th>
                                        <th>
                                            <center>Descripcion</center>
                                        </th>
                                        <th>
                                            <center>Monto total</center>
                                        </th>
                                        <th>
                                            <center>Moneda</center>
                                        </th>
                                        <th>
                                            <center>Metodo de pago</center>
                                        </th>
                                        <th>
                                            <center>Estado de pago</center>
                                        </th>
                                        <th>
                                            <center>Fecha de compra</center>
                                        </th>
                                        <th>
                                            <center>Empleado</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>

                                <body>
                                    <?php
                                    $contador = 0;

                                    foreach ($mov_compra_datos as $mov_compra_dato) {
                                        $id_compra = $mov_compra_dato['id_compra']; ?>
                                        <tr>
                                            <td><center><?php echo $contador = $contador + 1; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['codigo']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['des_tipo_bien_servicio']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['descripcion_doc']; ?></center></td>                                           
                                            <td><center><?php echo $mov_compra_dato['codigo_comprobante']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['num_comprobante']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['des_mov_compra']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['monto_total']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['descripcion_mon']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['metodo_pago']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['estado_pago']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['fecha_compra']; ?></center></td>
                                            <td><center><?php echo $mov_compra_dato['email_empleado']; ?></center></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="update_mv.php?id=<?php echo $id_compra; ?>"
                                                            type="button" class="btn btn-success"><i
                                                                class="fa fa-pencil-alt"></i> Editar</button></a>
                                                        <a href="delete_mv.php?id=<?php echo $id_compra; ?>"
                                                            type="button" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                            Borrar</button></a>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php

                                    }
                                    ?>
                                </body>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Compras",
                "infoEmpty": "Mostrando 0 to 0 of 0 Compras",
                "infoFiltered": "(Filtrado de _MAX_ total Compras)",
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