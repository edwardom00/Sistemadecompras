<?php  
include('../../config.php');

//$codigo = $_POST['codigo'];
$id_moneda = $_POST['id_moneda'];
$id_documento = $_POST['id_documento'];
$fecha_compra = $_POST['fecha_compra'];
$num_comprobante = $_POST['num_comprobante'];
$codigo_comprobante = $_POST['codigo_comprobante'];
$monto_total = $_POST['monto_total'];
$subtotal = $_POST['subtotal'];
$impuestos = $_POST['impuestos'];
$descuentos = $_POST['descuentos'];
$metodo_pago = $_POST['metodo_pago'];
$estado_pago = $_POST['estado_pago'];
$fecha_pago = $_POST['fecha_pago'];
$des_mov_compra = $_POST['des_mov_compra'];
$id_compra = $_POST['id_compra'];

$comprobante = $_FILES['comprobante'];
$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo . "__" . $comprobante['name'];
$location = "../../../mov_compra/archivos_mov/" . $filename;
move_uploaded_file($comprobante['tmp_name'], $location);

$sentencia = $pdo->prepare("UPDATE mov_compra SET 
id_moneda=:id_moneda,
id_documento =:id_documento ,
fecha_compra=:fecha_compra,
num_comprobante=:num_comprobante,
codigo_comprobante=:codigo_comprobante,
monto_total=:monto_total,
subtotal=:subtotal,
impuestos=:impuestos,
descuentos=:descuentos,
metodo_pago=:metodo_pago,
estado_pago=:estado_pago,
fecha_pago=:fecha_pago,
archivo_comprobante =:archivo_comprobante,
des_mov_compra=:des_mov_compra
WHERE id_compra =:id_compra");
//$sentencia->bindParam('codigo', $codigo);
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
$sentencia->bindParam(':id_compra', $id_compra);
$sentencia->bindParam(':archivo_comprobante', $filename);


if($sentencia->execute()){
session_start();
$_SESSION['mensaje'] = "Actualizacion exitosa";
$_SESSION['icono'] = "success";
header('Location: '.$URL.'/mov_compra');
}else{
// echo "";
session_start();
$_SESSION['mensaje'] = "Error, no se pudo actualizar";
$_SESSION['icono'] = "error";
header('Location: '.$URL.'/mov_compra/update_mv.php?id='.$id_compra);
}