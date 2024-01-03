<?php

$sql_sexo = "SELECT * FROM sexo";
$query_sexo = $pdo->prepare($sql_sexo);
$query_sexo ->execute();
$sexo_datos = $query_sexo->fetchAll(PDO::FETCH_ASSOC);