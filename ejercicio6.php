<?php
    $frutas = array("Manzana", "Pera", "Naranja", "Sandia");
    $frutas2 = array("m"=>"Manzana","p"=>"Pera","n"=>"Naranja");
    
    print_r($frutas2);

    echo $frutas2["m"];
    echo $frutas[1];

    foreach ($frutas as $indice=>&$fruta) {
        echo "<br/>".$indice ." ".$fruta;
    }
    print_r("<br/>");
    print_r($frutas);
    array_push($frutas, "Melon");
    print_r("<br/>");
    print_r($frutas);

?>