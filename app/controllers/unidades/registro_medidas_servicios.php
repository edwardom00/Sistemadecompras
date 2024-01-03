<?php
include('../../config.php');

$descripcion_med = $_POST['descripcion_med'];
$abreviatura_med = $_POST['abreviatura_med'];
$id_medida= $_POST['id_medida'];
$id_tipo_bien_servicio = 2;

$sentencia = $pdo->prepare("INSERT INTO medidas(descripcion_med, abreviatura_med, id_medida, id_tipo_bien_servicio) 
    VALUES(:descripcion_med, :abreviatura_med, :id_medida, :id_tipo_bien_servicio)");

$sentencia->bindParam(':descripcion_med', $descripcion_med);
$sentencia->bindParam(':abreviatura_med', $abreviatura_med);
$sentencia->bindParam(':id_medida', $id_medida);
$sentencia->bindParam(':id_tipo_bien_servicio', $id_tipo_bien_servicio);

if ($sentencia->execute()) {
    //echo "registro";
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
    </script>
    <?php

} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = 'Error, no se pudo registrar';
    $_SESSION['icono'] = 'error';
 //   header('Location: ' . $URL . '/categorias/index_bienes.php');
 ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
    </script>
    <?php
}
?>