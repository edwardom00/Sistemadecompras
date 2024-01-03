<?php  
include('../../config.php');

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$contador =0;
$sql = "SELECT * FROM empleados WHERE email='$email' AND contrasena='$contrasena'";
$query = $pdo->prepare($sql);
$query ->execute();
$empleados = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($empleados as $empleado) {
    $contador = $contador +1;
    $email_tabla = $empleado['email'];
    $nombres = $empleado['nombres'];

}

if($contador == 0){
    echo"Datos incorrectos XD";
    session_start();
    $_SESSION['mensaje']="Vuelva a ingresar sus datos";
    header('Location: '.$URL.'/login');
}else{
    echo "datos correctos";
    session_start();
    $_SESSION['sesion email']=$email;
    header('Location: '.$URL.'/index.php');
}