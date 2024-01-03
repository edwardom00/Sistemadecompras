<?php

$sql_mov_compra = "SELECT 
mv.id_compra as id_compra,
mv.codigo as codigo, 
mv.num_comprobante as num_comprobante,
mv.codigo_comprobante as codigo_comprobante,
tbs.des_tipo_bien_servicio as des_tipo_bien_servicio,
mv.monto_total as monto_total,
mv.metodo_pago as metodo_pago,
mv.estado_pago as estado_pago,
mv.fecha_compra as fecha_compra,
mv.fecha_pago as fecha_pago,
mv.subtotal as subtotal,
mv.impuestos as impuestos,
mv.descuentos as descuentos,
mv.archivo_comprobante as archivo_comprobante,
mv.des_mov_compra as des_mov_compra,
mon.descripcion_mon as descripcion_mon,
emp.email as email_empleado,
doc.id_documento as descripcion_doc
FROM mov_compra as mv 
INNER JOIN documentos as doc ON mv.id_documento = doc.id_documento
INNER JOIN empleados as emp ON mv.id_empleado = emp.id_empleado
INNER JOIN tipo_bien_servicio as tbs ON mv.id_tipo_bien_servicio= tbs.id_tipo_bien_servicio
INNER JOIN monedas as mon ON mv.id_moneda = mon.id_moneda";
$query_mov_compra = $pdo->prepare($sql_mov_compra);
$query_mov_compra ->execute();
$mov_compra_datos = $query_mov_compra->fetchAll(PDO::FETCH_ASSOC);