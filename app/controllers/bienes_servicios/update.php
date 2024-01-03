<?php
include('../../config.php');

$id_moneda = $_POST['id_moneda'];
$id_categoria = $_POST['id_categoria'];
$nombre = $_POST['nombre'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$descripcion = $_POST['descripcion'];
$id_proveedor = $_POST['id_proveedor'];
$id_medida = $_POST['id_medida'];
$costo = $_POST['costo'];
$id_empleado = $_POST['id_empleado'];
$id_bien_servicio = $_POST['id_bien_servicio'];

// Manejar la imagen correctamente
$image = $_FILES['imagen'];
$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo . "__" . $image['name'];
$location = "../../../bienes_servicios/img_bs/" . $filename;
move_uploaded_file($image['tmp_name'], $location);

// Preparar la consulta SQL para la actualización
$sentencia = $pdo->prepare("UPDATE bienes_servicios SET 
    id_moneda = :id_moneda,
    id_categoria = :id_categoria,
    nombre = :nombre,
    fecha_ingreso = :fecha_ingreso,
    descripcion = :descripcion,
    id_proveedor = :id_proveedor,
    id_medida = :id_medida,
    costo = :costo,
    imagen = :imagen,
    id_empleado = :id_empleado
    WHERE id_bien_servicio = :id_bien_servicio");

// Asociar parámetros
$sentencia->bindParam(':id_moneda', $id_moneda);
$sentencia->bindParam(':id_categoria', $id_categoria);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':id_proveedor', $id_proveedor);
$sentencia->bindParam(':id_medida', $id_medida);
$sentencia->bindParam(':costo', $costo);
$sentencia->bindParam(':imagen', $filename);
$sentencia->bindParam(':id_empleado', $id_empleado);
$sentencia->bindParam(':id_bien_servicio', $id_bien_servicio);

// Ejecutar la consulta
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Actualización exitosa";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/bienes_servicios/index_bienes.php');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error, no se pudo actualizar";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/bienes_servicios/update_bienes.php?id=' . $id_bien_servicio);
}
?>
