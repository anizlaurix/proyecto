<?php
$server="mysql.hostinger.mx";
$usuario="u330732779_ana";
$password="2BzRZmNRbU";
$baseDatos="u330732779_final";


//$server="localhost";
//$usuario="root";
//$password="";
//$baseDatos="RegistrarServicios";

$conexion=mysqli_connect($server, $usuario, $password,$baseDatos) or die("Error al conectarse al servidor de base de datos".mysqli_error());
//mysql_select_db($baseDatos,$conexion);
?>
