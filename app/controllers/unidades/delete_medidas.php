<?php
include('../../config.php');

$id_medida = $_POST['id_medida'];

try {
    $sentencia = $pdo->prepare("DELETE FROM medidas WHERE id_medida=:id_medida");

    $sentencia->bindParam(':id_medida', $id_medida);

    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Eliminación exitosa";
    $_SESSION['icono'] = "success";
    //header('Location: ' . $URL . '/tipo_usuario');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
    </script>
    <?php
} catch (PDOException $e) {
    // Verifica si la excepción es debido a la restricción de clave externa (FK)
    if ($e->getCode() == '23000') {
        session_start();
        $_SESSION['mensaje'] = "Error: No se puede eliminar la medida porque está siendo utilizado por algún producto.";
        $_SESSION['icono'] = "error";
        $_SESSION['showConfirmButton'] = "true";

        //header('Location: ' . $URL . '/tipo_usuario');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/unidades/index_medidas.php";
        </script>
        <?php
    } else {
        // Otra excepción, muestra un mensaje general de error
        echo "Error: " . $e->getMessage();
    }
}
?>