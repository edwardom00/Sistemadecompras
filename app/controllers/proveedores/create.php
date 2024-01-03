<?php  
include('../../config.php');

$ruc_prov = $_POST['ruc_prov'];
$nombre_prov = $_POST['nombre_prov'];
$direccion_prov = $_POST['direccion_prov'];
$id_tipo_bien_servicio = $_POST['id_tipo_bien_servicio'];
$ubigeo_prov = $_POST['ubigeo_prov'];
$telefono_prov = $_POST['telefono_prov'];
$correo_prov = $_POST['correo_prov'];
$banco_prov = $_POST['banco_prov'];
$cuenta_prov = $_POST['cuenta_prov'];
$cci_prov = $_POST['cci_prov'];

    $sentencia = $pdo->prepare("INSERT INTO proveedores(ruc_prov,nombre_prov,direccion_prov,id_tipo_bien_servicio,ubigeo_prov,telefono_prov,correo_prov,banco_prov,cuenta_prov,cci_prov) 
    VALUES(:ruc_prov,:nombre_prov,:direccion_prov,:id_tipo_bien_servicio,:ubigeo_prov,:telefono_prov,:correo_prov,:banco_prov,:cuenta_prov,:cci_prov)");
    $sentencia->bindParam(':ruc_prov', $ruc_prov);
    $sentencia->bindParam(':nombre_prov', $nombre_prov);
    $sentencia->bindParam(':direccion_prov', $direccion_prov);
    $sentencia->bindParam(':id_tipo_bien_servicio', $id_tipo_bien_servicio);
    $sentencia->bindParam(':ubigeo_prov', $ubigeo_prov);
    $sentencia->bindParam(':telefono_prov', $telefono_prov);
    $sentencia->bindParam(':correo_prov', $correo_prov);
    $sentencia->bindParam(':banco_prov', $banco_prov);
    $sentencia->bindParam(':cuenta_prov', $cuenta_prov);
    $sentencia->bindParam(':cci_prov', $cci_prov);
    
    
    if($sentencia->execute())
    {
    session_start();
    $_SESSION['mensaje'] = 'Registro exitoso';
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/proveedores');
}else{
   // echo "";
   session_start();
   $_SESSION['mensaje'] = 'Las contraseñas no son iguales';
   $_SESSION['icono'] = 'error';
   header('Location: '.$URL.'/proveedores/create.php');
}

