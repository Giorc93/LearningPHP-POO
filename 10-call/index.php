<?php

class Persona {
    private $nombre;
    private $apellidos;
    private $edad;
    
    public function __construct($nombre, $apellidos, $edad) {
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;   
    }
    
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);
        
        if($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);
            
            if(!isset($this->$nombre_metodo)) {
                return "<br/>El método no existe";
            }
            
            //$this->nombre;
            return $this->$nombre_metodo;
        }else{
        
        return "<br/>El método no existe";
        }
    }
}

$persona = new Persona("Gio", "Ramirez", "26");
echo $persona->getNombre();
echo $persona->getApellidos();
echo $persona->getEdad();
echo $persona->getPeso();


