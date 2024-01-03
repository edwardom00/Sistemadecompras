<?php
include('../../config.php');

$descripcion_mon = $_POST['descripcion_mon'];
$abreviatura_mon = $_POST['abreviatura_mon'];
$id_moneda = $_POST['id_moneda'];

$sentencia = $pdo->prepare("UPDATE monedas SET 
        descripcion_mon =:descripcion_mon,
        abreviatura_mon =:abreviatura_mon
        WHERE id_moneda = :id_moneda");
$sentencia->bindParam(':descripcion_mon', $descripcion_mon);
$sentencia->bindParam(':abreviatura_mon', $abreviatura_mon);
$sentencia->bindParam(':id_moneda', $id_moneda);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Actualizacion exitosa";
    $_SESSION['icono'] = "success";
    // header('Location: ' . $URL . '/tipo_usuario');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_monedas.php";
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
        location.href = "<?php echo $URL; ?>/unidades/index_monedas.php";
    </script>
    <?php
}