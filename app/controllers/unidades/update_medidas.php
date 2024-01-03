<?php
include('../../config.php');

$descripcion_med = $_POST['descripcion_med'];
$abreviatura_med = $_POST['abreviatura_med'];
$id_medida = $_POST['id_medida'];

$sentencia = $pdo->prepare("UPDATE medidas SET 
        descripcion_med =:descripcion_med,
        abreviatura_med =:abreviatura_med
        WHERE id_medida = :id_medida");
$sentencia->bindParam(':descripcion_med', $descripcion_med);
$sentencia->bindParam(':abreviatura_med', $abreviatura_med);
$sentencia->bindParam(':id_medida', $id_medida);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Actualizacion exitosa";
    $_SESSION['icono'] = "success";
    // header('Location: ' . $URL . '/tipo_usuario');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
    </script>
    <?php
} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = "Error, no se pudo actualizar";
    $_SESSION['icono'] = "error";
    //header('Location: ' . $URL . '/tipo_usuario/update.php?id=' . $id_empleado);
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
    </script>
    <?php
}