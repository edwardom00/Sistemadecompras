<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/usuarios/listado_de_usuarios.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de usuarios</h1>
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
          <div class="card card-lightblue">
            <div class="card-header">
              <h3 class="card-title">Usuarios</h3>
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
                      <center>Nombres</center>
                    </th>
                    <th>
                      <center>Email</center>
                    </th>
                    <th>
                      <center>Tipo de usuario</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </thead>

                <body>
                  <?php
                  $contador = 0;

                  foreach ($usuarios_datos as $usuarios_dato) {
                    $id_empleado = $usuarios_dato['id_empleado']; ?>
                    <tr>
                      <td>
                        <center>
                          <?php echo $contador = $contador + 1; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <?php echo $usuarios_dato['nombres'] . ' ' . $usuarios_dato['apellidos']; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <?php echo $usuarios_dato['email']; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <?php echo $usuarios_dato['des_tipo_usuario']; ?>
                        </center>
                      </td>
                      <td>
                        <center>
                          <div class="btn-group">
                            <a href="show.php?id=<?php echo $id_empleado; ?>" type="button" class="btn btn-info"><i
                                class="fa fa-eye"></i> Ver</button></a>
                            <a href="update.php?id=<?php echo $id_empleado; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</button></a>
                            <a href="delete.php?id=<?php echo $id_empleado; ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</button></a>
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
                      <center>Nombres</center>
                    </th>
                    <th>
                      <center>Email</center>
                    </th>
                    <th>
                      <center>Tipo de usuario</center>
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
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
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
     /* buttons: [{
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
          collectionLayout: 'one-column'
        }
    ],*/
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
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>