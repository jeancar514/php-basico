<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $password = "28232410";
    $baseDatos = "album";
    
    /* try{
        $conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    } */

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from fotos";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        //print_r($resultado);
        foreach($resultado as $foto){
            echo $foto['nombre'] . "<br>";
        }
        //$conexion->exec($sql);
        echo "Conexion realizada con exito";
    }catch(PDOException $e){
        echo "Error: " . $e;
    }

?>