<?php
include('../../config.php');

$des_categoria = $_POST['des_categoria'];
$fyh_creacion = date("Y-m-d H:i:s");
$id_tipo_bien_servicio = 2;

$sentencia = $pdo->prepare("INSERT INTO categorias(des_categoria, fyh_creacion, id_tipo_bien_servicio) 
    VALUES(:des_categoria, :fyh_creacion, :id_tipo_bien_servicio)");

$sentencia->bindParam(':des_categoria', $des_categoria);
$sentencia->bindParam(':fyh_creacion', $fyh_creacion);
$sentencia->bindParam(':id_tipo_bien_servicio', $id_tipo_bien_servicio);

if ($sentencia->execute()) {
    echo "registro";
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias/index_servicios.php";
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
        location.href = "<?php echo $URL; ?>/categorias/index_servicios.php";
    </script>
    <?php
}
?>