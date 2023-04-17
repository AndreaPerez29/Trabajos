<?php
//Declarar una variable $ + identificador + asignación del tipo de dato

$Variable = 45;
$Mensaje = "El valor de la vaiable es: ";
$Num1 = 87; $Num2 = 72; $Num3 = 43;
$Resta = $Num1 - $Num2 - $Num3;
$Suma = $Num1 + $Num2 + $Num3;
$Multiplicación = $Num1 * $Num2 * $Num3;
$División = $Num1 / $Num2 / $Num3; 
$Radio = 2;
define('Pi', '3.1416');
$Incremento = 10;
$Decremento = 10;

echo "La suma de".$Num1." + ".$Num2." + ".$Num3."es: ".$Suma."<br>";
echo "La resta de".$Num1." - ".$Num2." - ".$Num3."es: ".$Resta."<br>";
echo "La multiplicación de".$Num1." * ".$Num2." * ".$Num3."es: ".$Multiplicación."<br>";
echo "La división de".$Num1." / ".$Num2." / ".$Num3."es: ".$División."<br>";
//Area de un círculo
$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El área del círculo con el radio de: ".$Radio."por el valor de Pi que es".$Pi.", el resultado es: ".$Ejemplo;
echo $Mensaje2;
echo "El valor de Decremento es: ".--$Decremento."<br>";
echo "El valor de Incremento es: ".++$Incremento."<br>";

?>