<?php
  //Trabajaremos con el ciclo while y do while
/*  while(Expresión){
    Acciones que se cumpla la Expresión
  }
  do{
    Sentencia o acción
  }while(Expresión o Validación);
$variable = 0;
while($Variable < 25){
    $variable ++; //Se incrementa la variable de 1 en 1
    echo "El valor de la vaiable = <br>".$variable."<br><br>";
}
echo "El ciclo while acaba en: ".$variable;
*/

$genero = "femenino";
do{
    echo $genero."<br>";
    echo "Se generará el código por que primero genera la acción antes que la validación";
}while($genero == "masculino");
echo "Se ejecuta el código una vez que la expresión o validación se cumple";
?>