<?php

    class personas{
        public $nombre; //propiedad de la clase
        private $edad; //propiedad privada desde la clase
        protected $dni; //propiedad protegida desde la clase y sus clases derivadas
        function __construct($nombre, $edad, $dni){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->dni = $dni;
        }
        public function asignarNombre($nombre){ //metodo
            $this->nombre = $nombre;
        }
        public function asignarEdad($edad){ //metodo
            $this->edad = $edad;
            return $this->edad;
        }
    }
    class trabajador extends personas{
        public $puesto;
        public function asignarPuesto($puesto){
            $this->puesto = $puesto;
            echo "hola soy ".$this->nombre." El puesto es: ".$this->puesto;
        }
    }
    $persona = new trabajador("leandro", 30, 12345678);
    $persona->asignarPuesto("Programador");
?>