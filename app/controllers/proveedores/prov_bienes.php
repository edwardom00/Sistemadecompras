<?php

$sql_prov = "SELECT pr.id_proveedor as id_proveedor, pr.nombre_prov as nombre_prov, pr.ruc_prov as ruc_prov, 
pr.telefono_prov as telefono_prov, pr.correo_prov as correo_prov, tipo.des_tipo_bien_servicio as des_tipo_bien_servicio 
FROM proveedores as pr INNER JOIN tipo_bien_servicio as tipo ON pr.id_tipo_bien_servicio = tipo.id_tipo_bien_servicio
WHERE tipo.des_tipo_bien_servicio = 'Bienes';";
$query_prov = $pdo->prepare($sql_prov);
$query_prov ->execute();
$prov_datos = $query_prov->fetchAll(PDO::FETCH_ASSOC);