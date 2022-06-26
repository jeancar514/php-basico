<?php 
    session_start();
    if(isset($_SESSION['nombre'])){ // isset() es una funcion que devuelve true si la variable existe
        echo "sesion iniciada <br>";
        echo "nombre: " . $_SESSION['nombre'] . "<br>";
        echo "status: " . $_SESSION['status'] . "<br>";
    }else{
        echo "no hay datos";
    }
?>