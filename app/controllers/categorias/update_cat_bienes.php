<?php
include('../../config.php');

$id_categoria = $_POST['id_categoria'];
$des_categoria = $_POST['des_categoria'];



$sentencia = $pdo->prepare("UPDATE categorias SET 
        des_categoria =:des_categoria
        WHERE id_categoria = :id_categoria");
$sentencia->bindParam('des_categoria', $des_categoria);
$sentencia->bindParam('id_categoria', $id_categoria);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Actualizacion exitosa";
    $_SESSION['icono'] = "success";
   // header('Location: ' . $URL . '/tipo_usuario');
   ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias/index_bienes.php";
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
        location.href = "<?php echo $URL; ?>/categorias/index_bienes.php";
    </script>
    <?php
}