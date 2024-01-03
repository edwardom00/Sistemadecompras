<?php

$sql_bienes_servicios = "SELECT 
bs.id_bien_servicio as id_bien_servicio,
bs.codigo as codigo, 
bs.nombre as nombre,
bs.descripcion as descripcion, 
bs.costo as costo,
bs.fecha_ingreso as fecha_ingreso,
bs.imagen as imagen,
mon.descripcion_mon as descripcion_mon,
cat.des_categoria as des_categoria,
emp.email as email_empleado,
med.descripcion_med as descripcion_med,
pr.nombre_prov as nombre_prov
FROM bienes_servicios as bs 
INNER JOIN medidas as med ON bs.id_medida = med.id_medida
INNER JOIN empleados as emp ON bs.id_empleado = emp.id_empleado
INNER JOIN categorias as cat ON bs.id_categoria = cat.id_categoria
INNER JOIN tipo_bien_servicio as tbs ON cat.id_tipo_bien_servicio= tbs.id_tipo_bien_servicio
INNER JOIN monedas as mon ON bs.id_moneda = mon.id_moneda
INNER JOIN proveedores as pr ON bs.id_proveedor = pr.id_proveedor";
$query_bienes_servicios = $pdo->prepare($sql_bienes_servicios);
$query_bienes_servicios ->execute();
$bienes_servicios_datos = $query_bienes_servicios->fetchAll(PDO::FETCH_ASSOC);