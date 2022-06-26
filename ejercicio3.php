<?php
    if($_GET){
        // Recibiendo datos por Get
        $nombre = $_GET['nombre'];
        echo "Hola ".$nombre;
    }
    //  constantes 
    define("FOO",     "something");
    echo FOO;

    $valor1 = 10;
    $valor2 = 20;

    if($valor1 == $valor2){
        echo "son iguales";
    }else{
        echo "no son iguales";
    }
?>
