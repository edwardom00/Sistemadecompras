<?php

$sql_usuarios = "SELECT us.id_empleado as id_empleado, us.nombres as nombres, us.apellidos as apellidos, 
us.email as email, tipo.des_tipo_usuario as des_tipo_usuario 
FROM empleados as us INNER JOIN tipo_usuario as tipo ON us.id_tipo_usuario= tipo.id_tipo_usuario";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios ->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);