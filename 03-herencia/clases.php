<?php

//HERENCIA: Posibilidad de compartir atributos y métodos entre clases

class Persona {
    
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar() {
        return "Estoy hablando";
    }

    public function caminar() {
        return "Estoy hablando";
    }
}

class Informatico extends Persona{          // X extends Y: Permite a la clase X heredar las propiedades de la clase Y.
    
    public $lenguajes;
    public $experienciaProg;
    
    public function sabeLeng($lenguajes){
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }
    
    public function __construct() {
        $this->lenguajes = "HTML, CSS, JS";
        $this->experienciaProg = 10;
    }

    public function programar() {
        return "Estoy programando";
    }
    
    public function repararOrdenador() {
        return "Reparar ordenador";
    }
    
    public function hacerOfimatica () {
        return "Uso de Office";
    }
}

class TecnicoRedes extends Informatico {
    
    public $auditarRedes;
    public $experienciaRed;
    
    function auditar() {
        return "Estoy auditando una red";
    }
    
    public function __construct() {
        parent::__construct();          //parent:: Permite acceder al objeto padre desde la función de la clase hijo que hereda sus propiedades.
        
        $this->auditarRedes = "Experto";
        $this->experienciaRed = 5;
    }
}

