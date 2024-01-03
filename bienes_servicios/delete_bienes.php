<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');
include('../app/controllers/bienes_servicios/show_bienes.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Eliminar bien</h1>
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
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Informacion del bien</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="col-md-12">
                                <form action="../app/controllers/bienes_servicios/delete_bienes.php" method="post">
                                <input type="text" name="id_bien_servicio" value="<?php echo $id_bien_servicio_get; ?>" hidden>
                                    <div class="form-group">
                                        <label for="">Código:</label>
                                        <input type="text" name="codigo" class="form-control"
                                            value="<?php echo $codigo; ?>" disabled>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Nombre del bien:</label>
                                        <input type="text" name="nombre" class="form-control"
                                            value="<?php echo $nombre; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Categoría:</label>
                                        <input type="text" name="id_categoría" class="form-control"
                                            value="<?php echo $des_categoria; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Fecha de adquisicion:</label>
                                        <input type="date" name="fecha_ingreso" class="form-control"
                                            value="<?php echo $fecha_ingreso; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripción:</label>
                                        <input type="text" name="descripcion" class="form-control"
                                            value="<?php echo $descripcion; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Proveedor:</label>
                                        <input type="text" name="id_proveedor" class="form-control"
                                            value="<?php echo $nombre_prov; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Unidad de medida:</label>
                                        <input type="text" name="id_medida" class="form-control"
                                            value="<?php echo $abreviatura_med; ?>" disabled>
                                        <div class="form-group">
                                            <label for="">Costo:</label>
                                            <input type="number" name="costo" class="form-control"
                                                value="<?php echo $costo; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Moneda:</label>
                                            <input type="text" name="id_moneda" class="form-control"
                                                value="<?php echo $descripcion_mon; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Empleado:</label>
                                            <input type="email" name="id_empleado" class="form-control"
                                                value="<?php echo $email; ?>" disabled>
                                        </div>
                                        <div class="col-md-3">
                                            <div>
                                                <label for="">Imagen del Producto</label>
                                                <?php
                                                if (!empty($bien_servicio_dato['imagen'])) {
                                                    $imagenURL = $URL . "/bienes_servicios/img_bs/" . $bien_servicio_dato['imagen'];
                                                    echo '<a href="' . $imagenURL . '" target="_blank"><img src="' . $imagenURL . '" width="150px" alt=""></a>';
                                                } else {
                                                    echo 'No hay imagen disponible';
                                                }
                                                ?>
                                            </div>
                                        </div>


                                        <hr>
                                        <div class="form-group">
                                            <a href="index_bienes.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </div>

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