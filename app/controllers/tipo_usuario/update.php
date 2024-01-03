<?php
include('../../config.php');

$id_tipo_usuario = $_POST['id_tipo_usuario'];
$des_tipo_usuario = $_POST['des_tipo_usuario'];
$abr_tipo_usuario = $_POST['abr_tipo_usuario'];


$sentencia = $pdo->prepare("UPDATE tipo_usuario SET 
        des_tipo_usuario =:des_tipo_usuario,
        abr_tipo_usuario =:abr_tipo_usuario
        WHERE id_tipo_usuario = :id_tipo_usuario");
$sentencia->bindParam('des_tipo_usuario', $des_tipo_usuario);
$sentencia->bindParam('abr_tipo_usuario', $abr_tipo_usuario);
$sentencia->bindParam('id_tipo_usuario', $id_tipo_usuario);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Actualizacion exitosa";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/tipo_usuario');
} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar el tipo de usuario";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/tipo_usuario/update.php?id=' . $id_empleado);
}
