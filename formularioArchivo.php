<?php
    if($_POST){
        print_r($_POST);
        echo "<br>";
        print_r($_FILES['archivo']['tmp_name']);
        move_uploaded_file( $_FILES['archivo']['tmp_name'] , $_FILES['archivo']['name']);

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
    <form action="formularioArchivo.php" enctype="multipart/form-data" method="POST">
        <input type="file" name="archivo" id="">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>