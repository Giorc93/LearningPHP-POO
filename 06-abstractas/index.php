<?php

abstract class Ordenador {                      //abstract define la clase como abstracta, de esta manera no se puede instanciar y se utiliza para heredar propiedades a otras clases.
    
    public $encendido;
    
    abstract public function encender();        //abstract no permite denifinir la función en la clase. Debe ser definida en la clase que la hereda.
    
    public function apagar() {
        $this->encendido = false;
    }
}

class PCASSUS extends Ordenador{
    
    public $software;
    
    public function arrancarSoftware() {
        $this->software = true;
    }
    
    public function encender() {
        $this->encendido = true;
    }
}

$ordenador = new PCASSUS();
$ordenador->encender();
$ordenador->arrancarSoftware();
$ordenador->apagar();
var_dump($ordenador);