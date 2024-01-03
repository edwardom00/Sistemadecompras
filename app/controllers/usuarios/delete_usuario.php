<?php  
include('../../config.php');

$id_empleado = $_POST['id_empleado'];

    $sentencia = $pdo->prepare("DELETE FROM empleados WHERE id_empleado=:id_empleado");

    $sentencia->bindParam('id_empleado', $id_empleado);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Eliminacion exitosa";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/usuarios');

