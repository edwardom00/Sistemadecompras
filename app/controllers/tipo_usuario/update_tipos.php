<?php
$id_tipo_get = $_GET['id'];

$sql_tipos = "SELECT * FROM tipo_usuario where id_tipo_usuario = '$id_tipo_get'";
$query_tipos = $pdo->prepare($sql_tipos);
$query_tipos ->execute();
$tipos_datos = $query_tipos->fetchAll(PDO::FETCH_ASSOC);

foreach ($tipos_datos as $tipos_dato){
    $des_tipo_usuario = $tipos_dato['des_tipo_usuario'];
    $abr_tipo_usuario = $tipos_dato['abr_tipo_usuario'];
}