<?php
include "conecta.php";
if (ISSET($_POST['btn'])){
    $Nombre = $conecta->real_escape_string($_POST['Nombre']);
    $Apellidos = $conecta->real_escape_string($_POST['Apellidos']);
    $Direccion = $conecta->real_escape_string($_POST['Direccion']);
    $Telefono = $conecta->real_escape_string($_POST['Telefono']);
    $Fecha = $conecta->real_escape_string($_POST['Fecha']);
    $Email = $conecta->real_escape_string($_POST['Email']);
    if($Nombre== " " || $Apellidos== " " || $Direccion== " " || $Telefono==" " || $Fechanac==" " || $Email== " "){
       $Alerta="Los datos estan vacios";
    }    
    else{              
        $registro="INSERT INTO usuarios(Nombre,Apellidos,Direccion,Telefono,Fechanac,Email)VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Fecha','$Email')";
        $registroo=$conecta->query($registro);
        if($registroo>0){
            echo "Registrado con exito";
        }else{
            echo"Error al registrar";
        }
    }  
}
















?>