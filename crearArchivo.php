<?php
    $nombreArchivo = 'archivo.txt';
    $contenido = 'Hola mundo';
    // fopen() abre el archivo en modo escritura
    $archivoAbierto = fopen($nombreArchivo, 'w');
    // fwrite() escribe en el archivo
    fwrite($archivoAbierto, $contenido);
    // fclose() cierra el archivo
    fclose($archivoAbierto);
    
?>