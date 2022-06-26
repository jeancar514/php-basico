<?php
    $archivo = 'contenido.txt';
    // fopen() abre el archivo en modo lectura
    $archivoAbierto = fopen($archivo, 'r'); // r = read, w = write, a = append, r+ = read and write
    // fread() lee el archivo
    $contenido = fread($archivoAbierto, filesize($archivo));
    echo $contenido;
?>