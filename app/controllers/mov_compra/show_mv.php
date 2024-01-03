<?php
$id_compra_get = $_GET['id'];

$sql_mov_compra = "SELECT mv.*, doc.descripcion_doc, mon.descripcion_mon 
FROM mov_compra as mv 
INNER JOIN documentos as doc ON mv.id_documento = doc.id_documento
INNER JOIN monedas as mon ON mv.id_moneda = mon.id_moneda
WHERE mv.id_compra = :id_compra";

$query_mov_compra = $pdo->prepare($sql_mov_compra);
$query_mov_compra->bindParam(':id_compra', $id_compra_get, PDO::PARAM_INT);
$query_mov_compra->execute();
$mov_compra_datos = $query_mov_compra->fetchAll(PDO::FETCH_ASSOC);

foreach ($mov_compra_datos as $mov_compra_dato) {
    // Use values from the fetched result set
    $codigo = $mov_compra_dato['codigo'];
    $descripcion_mon = $mov_compra_dato['descripcion_mon'];
    $descripcion_doc = $mov_compra_dato['descripcion_doc'];
    $fecha_compra = $mov_compra_dato['fecha_compra'];
    $num_comprobante = $mov_compra_dato['num_comprobante'];
    $codigo_comprobante = $mov_compra_dato['codigo_comprobante'];
    $monto_total = $mov_compra_dato['monto_total'];
    $subtotal = $mov_compra_dato['subtotal'];
    $impuestos = $mov_compra_dato['impuestos'];
    $descuentos = $mov_compra_dato['descuentos'];
    $metodo_pago = $mov_compra_dato['metodo_pago'];
    $estado_pago = $mov_compra_dato['estado_pago'];
    $fecha_pago = $mov_compra_dato['fecha_pago'];
    $des_mov_compra = $mov_compra_dato['des_mov_compra'];
    $archivo_comprobante = $mov_compra_dato['archivo_comprobante'];
}
?>