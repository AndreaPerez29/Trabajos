<?php
if(isset($_POST['btn'])){
    $Num1 = $_POST['num1'];
    $Num2 = $_POST['num2'];
    if(!is_numeric($Num1)){
        echo "El valor asignado a la caja 1 no es un número";
    }
    elseif(!is_numeric($Num2)){
        echo "El valor asignado a la caja 2 no es un número";
    }
    else{
        $Respuesta = $Num1 + $Num2;
        echo "El resultado de la suma es: ".$Respuesta;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haciendo operaciones con php</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="num1" placeholder="Digita un número" required> +
<input type="text" name="num2" placeholder="Digita un número" required> 
<input type="Submit" value="suma" name="btn">
</form>
</body>
</html>