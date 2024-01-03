<?php
include('../../config.php');

$des_tipo_usuario = $_POST['des_tipo_usuario'];
$abr_tipo_usuario = $_POST['abr_tipo_usuario'];


$sentencia = $pdo->prepare("INSERT INTO tipo_usuario(des_tipo_usuario,abr_tipo_usuario) 
    VALUES(:des_tipo_usuario,:abr_tipo_usuario)");
$sentencia->bindParam(':des_tipo_usuario', $des_tipo_usuario);
$sentencia->bindParam(':abr_tipo_usuario', $abr_tipo_usuario);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/tipo_usuario');
} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = 'Error, no se pudo registrar';
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/tipo_usuario/create.php');
}
