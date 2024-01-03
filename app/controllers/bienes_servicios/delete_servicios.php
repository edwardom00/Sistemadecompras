<?php  
include('../../config.php');

$id_bien_servicio = $_POST['id_bien_servicio'];

    $sentencia = $pdo->prepare("DELETE FROM bienes_servicios WHERE id_bien_servicio=:id_bien_servicio");

    $sentencia->bindParam('id_bien_servicio', $id_bien_servicio);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Eliminacion exitosa";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/bienes_servicios/index_servicios.php');