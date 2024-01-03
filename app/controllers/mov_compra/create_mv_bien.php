<?php
include('../../config.php');

$codigo = $_POST['codigo'];
$id_empleado = $_POST['id_empleado'];
$id_moneda = $_POST['id_moneda'];
$id_documento= $_POST['id_documento'];
$fecha_compra = $_POST['fecha_compra'];
$num_comprobante = $_POST['num_comprobante'];
$codigo_comprobante= $_POST['codigo_comprobante'];
$monto_total = $_POST['monto_total'];
$subtotal = $_POST['subtotal'];
$impuestos = $_POST['impuestos'];
$descuentos = $_POST['descuentos'];
$metodo_pago = $_POST['metodo_pago'];
$estado_pago = $_POST['estado_pago'];
$fecha_pago = $_POST['fecha_pago'];
$des_mov_compra = $_POST['des_mov_compra'];
$id_tipo_bien_servicio = 1;

$comprobante = $_FILES['comprobante'];
$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo . "__" . $comprobante['name'];
$location = "../../../mov_compra/archivos_mov/" . $filename;
move_uploaded_file($comprobante['tmp_name'], $location);

$sentencia = $pdo->prepare("INSERT INTO mov_compra(codigo, id_empleado, id_moneda, id_documento, fecha_compra, num_comprobante, codigo_comprobante, monto_total, subtotal, impuestos, descuentos, metodo_pago, estado_pago, fecha_pago, des_mov_compra, archivo_comprobante, id_tipo_bien_servicio) 
    VALUES(:codigo, :id_empleado, :id_moneda, :id_documento, :fecha_compra, :num_comprobante, :codigo_comprobante, :monto_total, :subtotal, :impuestos, :descuentos, :metodo_pago, :estado_pago, :fecha_pago, :des_mov_compra, :archivo_comprobante, :id_tipo_bien_servicio)");
$sentencia->bindParam(':codigo', $codigo);
$sentencia->bindParam(':id_empleado', $id_empleado);
$sentencia->bindParam(':id_moneda', $id_moneda);
$sentencia->bindParam(':id_documento', $id_documento);
$sentencia->bindParam(':fecha_compra', $fecha_compra);
$sentencia->bindParam(':num_comprobante', $num_comprobante);
$sentencia->bindParam(':codigo_comprobante', $codigo_comprobante);
$sentencia->bindParam(':monto_total', $monto_total);
$sentencia->bindParam(':subtotal', $subtotal);
$sentencia->bindParam(':impuestos', $impuestos);
$sentencia->bindParam(':descuentos', $descuentos);
$sentencia->bindParam(':metodo_pago', $metodo_pago);
$sentencia->bindParam(':estado_pago', $estado_pago);
$sentencia->bindParam(':fecha_pago', $fecha_pago);
$sentencia->bindParam(':des_mov_compra', $des_mov_compra);
$sentencia->bindParam(':archivo_comprobante', $filename);
$sentencia->bindParam(':id_tipo_bien_servicio', $id_tipo_bien_servicio);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/mov_compra/index.php');
} else {
    // echo "";
    session_start();
    $_SESSION['mensaje'] = 'Error, no se pudo registrar';
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/mov_compra/create_mv_bien.php');
}





