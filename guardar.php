<?php
include "conexion.php";

$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$rfc=$_POST['Rfc'];
$tel=$_POST['tel'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto="images/".$rfc.".jpg";

$sql="INSERT INTO datos (IdServicios, NombreServicio, Direccion, Rfc, Telefono, Latitud, Longitud, Foto) VALUES('','$nom','$dir','$rfc','$tel','$lat','$longt', '$foto')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";
	  echo "nombre".$nom." Dirección".$dir." Rfc".$rfc." Teléfono".$tel." Latitud".$lat." Longitud".$longt." Foto".$foto;
	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
