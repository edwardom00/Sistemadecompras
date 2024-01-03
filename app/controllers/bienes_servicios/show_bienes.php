<?php
$id_bien_servicio_get = $_GET['id'];


$sql_bienes_servicios = "SELECT bn.*, tipo.des_tipo_bien_servicio,med.abreviatura_med,em.email,cat.des_categoria,mon.descripcion_mon,pro.nombre_prov
FROM bienes_servicios as bn 
INNER JOIN medidas as med ON bn.id_medida = med.id_medida
INNER JOIN empleados as em ON bn.id_empleado = em.id_empleado 
INNER JOIN categorias as cat ON bn.id_categoria = cat.id_categoria 
INNER JOIN monedas as mon ON bn.id_moneda = mon.id_moneda 
INNER JOIN tipo_bien_servicio as tipo ON bn.id_tipo_bien_servicio = tipo.id_tipo_bien_servicio 
INNER JOIN proveedores as pro ON bn.id_proveedor = pro.id_proveedor 
WHERE bn.id_bien_servicio = '$id_bien_servicio_get'";



$query_bienes_servicios = $pdo->prepare($sql_bienes_servicios);
$query_bienes_servicios ->execute();
$bienes_servicios_datos = $query_bienes_servicios->fetchAll(PDO::FETCH_ASSOC);

foreach ($bienes_servicios_datos as $bien_servicio_dato){
    $codigo = $bien_servicio_dato['codigo'];
    $nombre = $bien_servicio_dato['nombre'];
    $descripcion = $bien_servicio_dato['descripcion'];
    $costo = $bien_servicio_dato['costo'];
    $fecha_ingreso = $bien_servicio_dato['fecha_ingreso'];
    $imagen = $bien_servicio_dato['imagen'];
    $fyh_creacion = $bien_servicio_dato['fyh_creacion'];

    $des_tipo_bien_servicio = $bien_servicio_dato['des_tipo_bien_servicio'];
    $abreviatura_med = $bien_servicio_dato['abreviatura_med'];
    $email = $bien_servicio_dato['email'];
    $des_categoria = $bien_servicio_dato['des_categoria'];
    $descripcion_mon = $bien_servicio_dato['descripcion_mon'];
    $nombre_prov = $bien_servicio_dato['nombre_prov'];
}
