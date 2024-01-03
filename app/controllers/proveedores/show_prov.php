<?php
$id_proveedor_get = $_GET['id'];


$sql_prov = "SELECT pr.*, tipo.des_tipo_bien_servicio
FROM proveedores as pr 
INNER JOIN tipo_bien_servicio as tipo ON pr.id_tipo_bien_servicio = tipo.id_tipo_bien_servicio 
WHERE pr.id_proveedor = '$id_proveedor_get'";



$query_prov = $pdo->prepare($sql_prov);
$query_prov ->execute();
$proveedor_datos = $query_prov->fetchAll(PDO::FETCH_ASSOC);

foreach ($proveedor_datos as $proveedor_dato){
    $nombre_prov = $proveedor_dato['nombre_prov'];
    $ruc_prov = $proveedor_dato['ruc_prov'];
    $correo_prov = $proveedor_dato['correo_prov'];
    $des_tipo_bien_servicio = $proveedor_dato['des_tipo_bien_servicio'];
    $banco_prov = $proveedor_dato['banco_prov'];
    $telefono_prov = $proveedor_dato['telefono_prov'];
    $direccion_prov = $proveedor_dato['direccion_prov'];
    $ubigeo_prov = $proveedor_dato['ubigeo_prov'];
    $cuenta_prov = $proveedor_dato['cuenta_prov'];
    $cci_prov = $proveedor_dato['cci_prov'];
}

