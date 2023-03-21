<?php
$Host = "localhost";
$UserHost = "root";
$Database = "proyectone";
$Password = "";
$conect = mysqli_connect($Nombre,$Apellidos,$Direccion,$Telefono,$FechaNac,$Email);
if($conect->connect_error){
  die('Error al conectar la base de datos del aplicativo'.$conecta->connect_error);
}
?>
