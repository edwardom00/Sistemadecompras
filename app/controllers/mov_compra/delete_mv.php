<?php  
include('../../config.php');

$id_compra = $_POST['id_compra'];

    $sentencia = $pdo->prepare("DELETE FROM mov_compra WHERE id_compra=:id_compra");

    $sentencia->bindParam('id_compra', $id_compra);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Eliminacion exitosa";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/mov_compra');