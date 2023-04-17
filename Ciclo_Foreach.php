<?php
    /*foreach(expresion as $variable){
    aquí van las acciones
    }
    */
    $datos = ["abcdefghijk", 54, 'e', 14.5, true];
    echo "<pre>\n";
    var_dump($datos);
    echo "</pre>\n";
    foreach($datos as $Recorrido){
    echo "<p>$Recorrido</p>\n";
    }

?>