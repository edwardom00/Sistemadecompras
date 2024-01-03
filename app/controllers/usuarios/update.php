<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nac = $_POST['fecha_nac'];
$descripcion_sexo = $_POST['descripcion_sexo'];
$des_tipo_usuario = $_POST['des_tipo_usuario'];
$direccion = $_POST['direccion'];
$ubigeo = $_POST['ubigeo'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$contrasena_repetido = $_POST['contrasena_repetido'];
$id_empleado = $_POST['id_empleado'];

if ($contrasena == "") {
    if ($contrasena == $contrasena_repetido) {
        $sentencia = $pdo->prepare("UPDATE empleados SET 
        nombres =:nombres,
        apellidos =:apellidos,
        fecha_nac =:fecha_nac,
        id_sexo =:id_sexo,
        id_tipo_usuario =:id_tipo_usuario,
        direccion =:direccion,
        ubigeo =:ubigeo,
        telefono =:telefono,
        email =:email
        WHERE id_empleado = :id_empleado");
        $sentencia->bindParam('nombres', $nombres);
        $sentencia->bindParam('apellidos', $apellidos);
        $sentencia->bindParam('fecha_nac', $fecha_nac);
        $sentencia->bindParam('id_sexo', $descripcion_sexo);
        $sentencia->bindParam('id_tipo_usuario', $des_tipo_usuario);
        $sentencia->bindParam('direccion', $direccion);
        $sentencia->bindParam('ubigeo', $ubigeo);
        $sentencia->bindParam('telefono', $telefono);
        $sentencia->bindParam('email', $email);
        $sentencia->bindParam('id_empleado', $id_empleado);
        $sentencia->execute();
        session_start();
        $_SESSION['mensaje'] = "Actualizacion exitosa";
        $_SESSION['icono'] = "success";
        header('Location: ' . $URL . '/usuarios/');
    } else {
        // echo "";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_empleado);
    }
} else {
    if ($contrasena == $contrasena_repetido) {
        $sentencia = $pdo->prepare("UPDATE empleados SET 
    nombres =:nombres,
    apellidos =:apellidos,
    fecha_nac =:fecha_nac,
    id_sexo =:id_sexo,
    id_tipo_usuario  =:id_tipo_usuario ,
    direccion =:direccion,
    ubigeo =:ubigeo,
    telefono =:telefono,
    email =:email,
    contrasena =:contrasena 
    WHERE id_empleado = :id_empleado");
        $sentencia->bindParam('nombres', $nombres);
        $sentencia->bindParam('apellidos', $apellidos);
        $sentencia->bindParam('fecha_nac', $fecha_nac);
        $sentencia->bindParam('id_sexo', $descripcion_sexo);
        $sentencia->bindParam('id_tipo_usuario', $des_tipo_usuario);
        $sentencia->bindParam('direccion', $direccion);
        $sentencia->bindParam('ubigeo', $ubigeo);
        $sentencia->bindParam('telefono', $telefono);
        $sentencia->bindParam('email', $email);
        $sentencia->bindParam('contrasena', $contrasena);
        $sentencia->bindParam('id_empleado', $id_empleado);
        $sentencia->execute();
        session_start();
        $_SESSION['mensaje'] = "Actualizacion exitosa";
        $_SESSION['icono'] = "success";
        header('Location: ' . $URL . '/usuarios');
    } else {
        // echo "";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_empleado);
    }
}