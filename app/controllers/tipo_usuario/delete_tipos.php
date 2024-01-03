<?php
include('../../config.php');

$id_tipo_usuario = $_POST['id_tipo_usuario'];

try {
    $sentencia = $pdo->prepare("DELETE FROM tipo_usuario WHERE id_tipo_usuario=:id_tipo_usuario");

    $sentencia->bindParam(':id_tipo_usuario', $id_tipo_usuario);

    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Eliminación exitosa";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/tipo_usuario');
} catch (PDOException $e) {
    // Verifica si la excepción es debido a la restricción de clave externa (FK)
    if ($e->getCode() == '23000') {
        session_start();
        $_SESSION['mensaje'] = "Error: No se puede eliminar el tipo de usuario porque está siendo utilizado por algún usuario.";
        $_SESSION['icono'] = "error";
        $_SESSION['showConfirmButton'] = "true";
        
        header('Location: ' . $URL . '/tipo_usuario');
    } else {
        // Otra excepción, muestra un mensaje general de error
        echo "Error: " . $e->getMessage();
    }
}
?>