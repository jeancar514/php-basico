<?php 
    class miClass{
        public static function medotoEstatico(){
            echo "Hola soy un metodo estatico";
        } 
    }
    $obj = new miClass();
    $obj->medotoEstatico();
    miClass::medotoEstatico(); 
?>