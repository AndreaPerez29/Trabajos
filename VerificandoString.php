<?php
  //Verificar si la salida de datos es true el valor es tipo string y false de lo contrario
  $Valores = array(false, true, null, 'aeiou', '23,', 23, '23.5', '', '', '0', 0);
  foreach($Valores as $Valor){
    echo "es un string(";
    var_export($Valor);
    echo ") =";
    var_dump(is_string($Valor));
    echo "<br><br>";
  }
  
  $Mensaje = "esto es una cadena de caracteres";
  if(is_string($Mensaje)){
    echo $Mensaje."<br>";
    var_dump($Mensaje);
  }
  else{
    echo "el valor del mensaje no es un string: ".$Mensaje;
  }
?>