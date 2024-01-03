<?php

$sql_monedas = "SELECT mon.id_moneda, mon.descripcion_mon, mon.abreviatura_mon
FROM monedas mon";
$query_monedas = $pdo->prepare($sql_monedas);
$query_monedas ->execute();
$monedas_datos = $query_monedas->fetchAll(PDO::FETCH_ASSOC);