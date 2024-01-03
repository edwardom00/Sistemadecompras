<?php
include('../../config.php');

$id_categoria = $_POST['id_categoria'];

try {
    $sentencia = $pdo->prepare("DELETE FROM categorias WHERE id_categoria=:id_categoria");

    $sentencia->bindParam(':id_categoria', $id_categoria);

    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Eliminación exitosa";
    $_SESSION['icono'] = "success";
    //header('Location: ' . $URL . '/tipo_usuario');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias/index_bienes.php";
    </script>
    <?php
} catch (PDOException $e) {
    // Verifica si la excepción es debido a la restricción de clave externa (FK)
    if ($e->getCode() == '23000') {
        session_start();
        $_SESSION['mensaje'] = "Error: No se puede eliminar la categoria porque está siendo utilizado por algún producto.";
        $_SESSION['icono'] = "error";
        $_SESSION['showConfirmButton'] = "true";

        //header('Location: ' . $URL . '/tipo_usuario');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/categorias/index_bienes.php";
        </script>
        <?php
    } else {
        // Otra excepción, muestra un mensaje general de error
        echo "Error: " . $e->getMessage();
    }
}
?>