

<?php
define ('SERVIDOR','localhost');
define ('USUARIO', 'root');
define ('PASSWORD','');
define ('BD', 'sistemadecompras');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexion a la base de datos fue con exito";
}catch(PDOException $e){
    print_r($e);
}

$URL = "http://localhost/gestion";

