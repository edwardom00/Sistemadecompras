<?php

$sql_tipo_bien_servicio = "SELECT tbs.id_tipo_bien_servicio, tbs.des_tipo_bien_servicio
FROM tipo_bien_servicio tbs";
$query_tipo_bien_servicio = $pdo->prepare($sql_tipo_bien_servicio);
$query_tipo_bien_servicio ->execute();
$tipo_bien_servicio_datos = $query_tipo_bien_servicio->fetchAll(PDO::FETCH_ASSOC);