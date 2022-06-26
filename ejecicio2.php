<?php
    if($_POST){
        // Recibiendo datos por Post
        $nombre = $_POST['nombre'];
        echo "Hola ".$nombre;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejecicio2.php" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" placeholder="Nombre" name="nombre">
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>