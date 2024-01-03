<?php  
include('../../config.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nac = $_POST['fecha_nac'];
$id_sexo = $_POST['id_sexo'];
$id_tipo_usuario = $_POST['id_tipo_usuario'];
$direccion = $_POST['direccion'];
$ubigeo = $_POST['ubigeo'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$contrasena_repetido = $_POST['contrasena_repetido'];

if($contrasena == $contrasena_repetido){
    $sentencia = $pdo->prepare("INSERT INTO empleados(nombres,apellidos,fecha_nac,id_sexo,id_tipo_usuario,direccion,ubigeo,telefono,email,contrasena) 
    VALUES(:nombres,:apellidos,:fecha_nac,:id_sexo,:id_tipo_usuario,:direccion,:ubigeo,:telefono,:email,:contrasena)");
    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':apellidos', $apellidos);
    $sentencia->bindParam(':fecha_nac', $fecha_nac);
    $sentencia->bindParam(':id_sexo', $id_sexo);
    $sentencia->bindParam(':id_tipo_usuario', $id_tipo_usuario);
    $sentencia->bindParam(':direccion', $direccion);
    $sentencia->bindParam(':ubigeo', $ubigeo);
    $sentencia->bindParam(':telefono', $telefono);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':contrasena', $contrasena);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/usuarios');
}else{
   // echo "";
   session_start();
   $_SESSION['mensaje'] = 'Las contraseñas no son iguales';
   $_SESSION['icono'] = 'error';
   header('Location: '.$URL.'/usuarios/create.php');
}




