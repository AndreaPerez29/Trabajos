<?php
  $Valor1 = 35;
  $Valor2 = 40;
  $Valor3 = 20;
  $Letra = "i";
  //Sentencia If, operadores relacionales u operadores logicos
/*if(Condición){
   codigo o acción a realizar, si se cumple la condición 
}
else{
   Si la acción es contraria al if, aquí se ejecutara otra acción     
}
if($Valor1 > $Valor2 and $Valor1 > $Valor3){
   echo "El valor de: ".$Valor1."es menor a ".$Valor2."y al: ".$Valor3;
}
else if($Valor2 > $Valor1 and $Valor2 > $Valor3){
echo "El valor de: ".$Valor2." es mayor a: ".$Valor1." y al: ".$Valor3;
}
else if($Valor3 > $Valor1 and $Valor3 > $Valor2){
   echo "El valor de: ".$Valor3."es mayorr al: ".$Valor1."y al: ".$Valor2;
}
else{
   echo "No se cumple con ninguna de las condiciones";
}
 */

if($Letra == 'a' || $Letra == 'e' || $Letra == 'i' || $Letra == 'o' || $Letra == 'u'){
   echo "El valor de la variable letra es".$Letra."una vocal";
}
else{
   echo "El valor de la variable letra es una consonante";
}
?>