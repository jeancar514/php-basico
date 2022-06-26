<?php 
    session_start();
    echo "sesion iniciada <br>";
    echo "nombre: " . $_SESSION['nombre'] . "<br>";
    echo "status: " . $_SESSION['status'] . "<br>";
    session_destroy();
    
?>