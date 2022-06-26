<?php 
    session_start();
    $_SESSION['nombre'] = "Juan";
    $_SESSION['status'] = "logeado";

    echo "sesion iniciada <br>";
    echo "nombre: " . $_SESSION['nombre'] . "<br>";
    echo "status: " . $_SESSION['status'] . "<br>";
?>