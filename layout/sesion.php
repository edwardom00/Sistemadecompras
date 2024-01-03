<?php
session_start();
if(isset($_SESSION['sesion email'])){
  //echo "Si existe sesion";
  $email_sesion=$_SESSION['sesion email'];
  $sql = "SELECT us.id_empleado as id_empleado, us.nombres as nombres, us.apellidos as apellidos, 
  us.email as email,us.id_tipo_usuario as id_tipo_usuario, tipo.des_tipo_usuario as des_tipo_usuario 
  FROM empleados as us INNER JOIN tipo_usuario as tipo ON us.id_tipo_usuario= tipo.id_tipo_usuario WHERE email='$email_sesion'";
  $query = $pdo->prepare($sql);
  $query ->execute();
  $empleados = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($empleados as $empleado) {
      $id_empleado_sesion = $empleado["id_empleado"];
      $nombres_sesion = $empleado['nombres'].' '. $empleado['apellidos'];
      $tipo_sesion = $empleado['des_tipo_usuario'];
      $id_tipo_usuario = $empleado['id_tipo_usuario'];
  }
}else{
  echo "No existe sesion";
  header( 'Location: '.$URL.'/login');
}