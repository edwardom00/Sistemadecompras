<?php

$sql_medidas = "SELECT med.id_medida, med.descripcion_med, med.abreviatura_med, med.id_tipo_bien_servicio, tbs.des_tipo_bien_servicio
FROM medidas med
JOIN tipo_bien_servicio tbs ON med.id_tipo_bien_servicio = tbs.id_tipo_bien_servicio
WHERE tbs.des_tipo_bien_servicio = 'Servicios';";
$query_medidas = $pdo->prepare($sql_medidas);
$query_medidas ->execute();
$medidas_datos = $query_medidas->fetchAll(PDO::FETCH_ASSOC);