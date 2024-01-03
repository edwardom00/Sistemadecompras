<?php
include('../../config.php');

$descripcion_mon = $_POST['descripcion_mon'];
$abreviatura_mon = $_POST['abreviatura_mon'];
$id_moneda= $_POST['id_moneda'];

$sentencia = $pdo->prepare("INSERT INTO monedas(descripcion_mon, abreviatura_mon, id_moneda) 
    VALUES(:descripcion_mon, :abreviatura_mon, :id_moneda)");

$sentencia->bindParam(':descripcion_mon', $descripcion_mon);
$sentencia->bindParam(':abreviatura_mon', $abreviatura_mon);
$sentencia->bindParam(':id_moneda', $id_moneda);

if ($sentencia->execute()) {
    //echo "registro";
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_monedas.php";
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
        location.href = "<?php echo $URL; ?>/unidades/index_monedas.php";
    </script>
    <?php
}
?>