<?php
    $jsonContenido = '[
    {
        "nombre": "Juan",
        "apellido": "Perez",
        "edad": "23"
    },
    {
        "nombre": "Josi",
        "apellido": "Perez",
        "edad": "23"
    }
    ]';

    $resultado = json_decode($jsonContenido);
    //print_r($resultado);
    foreach ($resultado as $persona) {
        echo $persona->nombre ." ". $persona->apellido. '<br>';
    }
    $personas = array('nombre' => 'Juan', 'apellido' => 'Perez', 'edad' => 23);
    $jsonPersonas = json_encode($personas);
    echo $jsonPersonas;

    /// consumir api
    $url = 'https://api.dailymotion.com/videos?channel=sport&limit=10';
    $opciones = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false));
    $json = file_get_contents($url, false, stream_context_create($opciones));
    $resultado = json_decode($json);
    print_r($resultado);

/*     foreach ($resultado->list as $video) {
        print_r($video->title);
        print_r($video->channel);
    } */    
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
    <ul>
        <?php foreach ($resultado->list as $video) { ?>
            <li>
                <?php echo $video->title. " <br>"; ?>
                <?php echo $video->channel. " <br>"; ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>