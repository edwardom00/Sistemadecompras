<?php

$sql_categorias = "SELECT c.id_categoria, c.id_tipo_bien_servicio, c.des_categoria
FROM categorias c
JOIN tipo_bien_servicio tbs ON c.id_tipo_bien_servicio = tbs.id_tipo_bien_servicio
WHERE tbs.des_tipo_bien_servicio = 'Bienes';";
$query_categorias = $pdo->prepare($sql_categorias);
$query_categorias ->execute();
$categorias_datos = $query_categorias->fetchAll(PDO::FETCH_ASSOC);