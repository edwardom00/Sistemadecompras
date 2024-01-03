<?php

$sql_tipos = "SELECT * FROM tipo_usuario";
$query_tipos = $pdo->prepare($sql_tipos);
$query_tipos ->execute();
$tipos_datos = $query_tipos->fetchAll(PDO::FETCH_ASSOC);