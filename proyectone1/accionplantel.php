<?php
include "conecta.php";
if (ISSET($_POST['btn2'])){
    $Nombre_Plantel = $conecta->real_escape_string($_POST['NombrePlantel']);
    $Clave_Plantel = $conecta->real_escape_string($_POST['ClavePlantel']);
    $Direccion = $conecta->real_escape_string($_POST['Direccion']);
    $Telefono = $conecta->real_escape_string($_POST['Telefono']);
    $Responsable = $conecta->real_escape_string($_POST['Responsable']);
   
    if($Nombre_Plnatel== " " || $Clave_Plantel== " " || $Direccion== " " || $Telefono==" " || $Responsable==" "){
       $Alerta="Los datos estan vacios";
    }    
    else{              
        $registro="INSERT INTO plantel(NombrePlantel,ClavePlantel,Direccion,Telefono,Responsable)VALUES('$Nombre_Plantel','$Clave_Plantel','$Direccion','$Telefono','$Responsable')";
        $registros=$conecta->query($registro);
        if($registros>0){
            echo"Regisrado con exito";
        }else{
            echo"Error al registrar";
        }
    }  
}
















?>