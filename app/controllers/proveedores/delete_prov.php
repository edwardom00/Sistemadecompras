<?php  
include('../../config.php');

$id_proveedor = $_POST['id_proveedor'];

try {
    $sentencia = $pdo->prepare("DELETE FROM proveedores WHERE id_proveedor=:id_proveedor");

    $sentencia->bindParam('id_proveedor', $id_proveedor);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Eliminacion exitosa";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/proveedores');
} catch (PDOException $e) {
    // Verifica si la excepción es debido a la restricción de clave externa (FK)
    if ($e->getCode() == '23000') {
        session_start();
        $_SESSION['mensaje'] = "Error: No se puede eliminar el proveedor porque está siendo utilizado por algún producto.";
        $_SESSION['icono'] = "error";
        $_SESSION['showConfirmButton'] = "true";

        //header('Location: ' . $URL . '/tipo_usuario');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/proveedores";
        </script>
        <?php
    } else {
        // Otra excepción, muestra un mensaje general de error
        echo "Error: " . $e->getMessage();
    }
}