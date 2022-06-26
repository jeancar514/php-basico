<?php

    class persona{
        public $nombre; //propiedad de la clase
        private $edad; //propiedad privada desde la clase
        protected $dni; //propiedad protegida desde la clase y sus clases derivadas
        public function asignarNombre($nombre){ //metodo
            $this->nombre = $nombre;
        }
        public function asignarEdad($edad){ //metodo
            $this->edad = $edad;
            return $this->edad;
        }
    }

    $objAlumno = new persona();
    $objAlumno->asignarNombre("Juan");
    echo $objAlumno->nombre;
    echo $objAlumno->asignarEdad(20);
?>