<?php
$id_empleado_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_empleado as id_empleado, us.nombres as nombres, us.apellidos as apellidos, 
us.email as email, us.fecha_nac as fecha_nac, us.id_sexo as id_sexo, us.telefono as telefono,us.direccion as direccion,us.ubigeo as ubigeo,
tipo.des_tipo_usuario as des_tipo_usuario, sx.descripcion_sexo as descripcion_sexo 
FROM empleados as us 
INNER JOIN tipo_usuario as tipo ON us.id_tipo_usuario= tipo.id_tipo_usuario 
INNER JOIN sexo as sx ON us.id_sexo= sx.id_sexo 
where id_empleado = '$id_empleado_get'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios ->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuario_dato){
    $nombres = $usuario_dato['nombres'];
    $apellidos = $usuario_dato['apellidos'];
    $email = $usuario_dato['email'];
    $fecha_nac = $usuario_dato['fecha_nac'];
    $sexo = $usuario_dato['id_sexo'];
    $des_tipo_usuario = $usuario_dato['des_tipo_usuario'];
    $descripcion_sexo = $usuario_dato['descripcion_sexo'];
    $telefono = $usuario_dato['telefono'];
    $direccion = $usuario_dato['direccion'];
    $ubigeo = $usuario_dato['ubigeo'];
}

