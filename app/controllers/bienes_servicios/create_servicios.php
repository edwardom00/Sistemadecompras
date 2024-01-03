<?php
include('../../config.php');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$id_categoria = $_POST['id_categoria'];
$descripcion = $_POST['descripcion'];
$id_medida = $_POST['id_medida'];
$costo = $_POST['costo'];
$id_moneda = $_POST['id_moneda'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$id_empleado = $_POST['id_empleado'];
$id_proveedor = $_POST['id_proveedor'];
$fechaHora = date('Y-m-d H:i:s');
$id_tipo_bien_servicio = 2;

$image = $_POST['image'];
$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo."__".$_FILES['image']['name'];
$location = "../../../bienes_servicios/img_bs/".$filename;
move_uploaded_file($_FILES['image']['tmp_name'],$location);

$sentencia = $pdo->prepare("INSERT INTO bienes_servicios(codigo,nombre,descripcion,id_categoria,id_tipo_bien_servicio,id_medida,costo,id_moneda,fecha_ingreso,id_empleado,imagen,fyh_creacion,id_proveedor) 
    VALUES(:codigo,:nombre,:descripcion,:id_categoria,:id_tipo_bien_servicio,:id_medida,:costo,:id_moneda,:fecha_ingreso,:id_empleado,:imagen,:fyh_creacion,:id_proveedor)");
$sentencia->bindParam('codigo', $codigo);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('id_categoria', $id_categoria);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('id_medida', $id_medida);
$sentencia->bindParam('costo', $costo);
$sentencia->bindParam('id_moneda', $id_moneda);
$sentencia->bindParam('fecha_ingreso', $fecha_ingreso);
$sentencia->bindParam('id_empleado', $id_empleado);
$sentencia->bindParam('id_proveedor', $id_proveedor);
$sentencia->bindParam('imagen', $filename);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam(':id_tipo_bien_servicio', $id_tipo_bien_servicio);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/bienes_servicios/index_servicios.php');
} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = 'Error, no se pudo registrar';
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/bienes_servicios/create_servicios.php');
}


