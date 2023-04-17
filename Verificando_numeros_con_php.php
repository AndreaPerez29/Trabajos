<?php
  //Una práctica que calcule el promedio de 5 notas o calificaciones verificando que los valores sean numericos posteriormente indicar si esta aprovado o reprobado según el valor asignado por el promedio
  $Cali1 = 8;
  $Cali2 = 9;
  $Cali3 = 8;
  $Cali4 = 7;
  $Cali5 = 10;
  $Minimo = 7;
  /*
  if(is_numeric($Calificación1) && is_numeric($Calificación2) && is_numeric($Calificación3) && is_numeric($Calificación4) && is_numeric($Calificación5)){
    $Promedio = ($Calificación1+$Calificación2+$Calificación3+$Calificación4+$Calificación5)/5;
    if($Promedio >= $Minimo){
        echo "<br><br> Tu promedio es de: ".$Promedio.", por lo tanto estas aprobado :D";
    }
    else{
        echo "<br><br> Tu promedio es de: ".$Promedio.", por lo tanto no estas aprobado:(";
    }
  }
  else{
    $Mensaje = "Alguno de los valores no corresponde a un valor numerico";
    echo $Mensaje;
  }
*/
if(!is_numeric($Cali1)){
    echo "El valor de la Calificación 1 es: ".$Cali1.", no es numerico";
}
else if(!is_numeric($Cali2)){
    echo "El valor de la Calificación 2 es: ".$Cali2.", no es numerico";
}
else if(!is_numeric($Cali3)){
    echo "El valor de la Calificación 3 es: ".$Cali3.", no es numerico";
}
else if(!is_numeric($Cali4)){
    echo "El valor de la Calificación 4 es: ".$Cali4.", no es numerico";
}
else if(!is_numeric($Cali5)){
    echo "El valor de la Calificación 5 es: ".$Cali5.", no es numerico";
}
else{
    $Promedio = ($Cali1+$Cali2+$Cali3+$Cali4+$Cali5)/5;
    if($Promedio >= $Minimo){
        echo "El promedio obtenido es de: ".$Promedio." por lo tanto estas aprobado";
    }
    else{
        echo "El promedio obtenido es de: ".$Promedio." por lo tanto estas no aprobado";
    }
}

?>