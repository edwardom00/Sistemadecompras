<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/tipo_usuario/listado_de_tipos.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de tipos</h1>
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
          <div class="card card-olive">
            <div class="card-header">
              <h3 class="card-title">Tipos de usuarios</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
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

                  foreach ($tipos_datos as $tipos_dato) {
                    $id_tipo_usuario = $tipos_dato['id_tipo_usuario']; ?>
                    <tr>
                      <td>
                        <center>
                          <?php echo $contador = $contador + 1; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <?php echo $tipos_dato['des_tipo_usuario']; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <?php echo $tipos_dato['abr_tipo_usuario']; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <div class="btn-group">
                            <a href="update.php?id=<?php echo $id_tipo_usuario; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</button></a>
                            <a href="delete.php?id=<?php echo $id_tipo_usuario; ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</button></a>
                          </div>
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
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Tipos",
        "infoEmpty": "Mostrando 0 to 0 of 0 Tipos",
        "infoFiltered": "(Filtrado de _MAX_ total Tipos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Tipos",
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
      buttons:[{

extend : 'collection',
text: 'Reportes',
orientation: 'landscape',
buttons:[{
  text: 'Copiar',
  extend: 'copy',
},{
  extend: 'pdf',
},{
  extend: 'csv',
},{
  extend: 'excel',
},{
  text: 'Imprimir',
  extend : 'print',
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