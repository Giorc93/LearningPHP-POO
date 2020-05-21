<?php

//Interfaz: Contrato en el cual se definen qué métodos y en qué orden van a estar en una clase.

interface Ordenador {
    
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
    
}

class iMac implements Ordenador {
    
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        return 'Encender...';
    }
    
    public function apagar() {
        ;
    }
    
    public function reiniciar() {
        ;
    }
    
    public function desfragmentar() {
        ;
    }
    
    public function detectarUSB() {
        ;
    }
}

$macintosh = new iMac;
$macintosh->setModelo('MacBook Air Pro');
echo $macintosh->getModelo();
echo $macintosh->encender();