<?php

//PROGRAMACIÓN ORIENTADA A OBJETOS EN PHP (POO)

//Definir una clase: Molde para crear más objetos de tipo coche con caracteristicas parecidas

class Coche{
    
    //Atributos o Propiedades (Variables)
    public $color = 'red';
    public $modelo = 'Spider';
    public $velocidad = 220;
    public $marca = 'Ferrari';
    public $hp = 250;
    public $plazas = 2;
    
    //Métodos (Funciones)
    public function getColor(){
        //$this->X Busca en ésta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function acelerar($vel){
        $this->velocidad += $vel;
    }
    
    public function setModel($modelo){
        $this->modelo = $modelo;
    }

        public function frenar($vel){
        $this->velocidad -= $vel;
    }
    
    public function getVel(){
        return $this->velocidad;
    }
}//FIN DEFINICIÓN DE CLASE

//CREAR UN OBJETO O INSTANCIAR LA CLASE

$coche = new Coche;
var_dump($coche);

//USAR LOS MÉTODOS

echo "<br/>La velocidad del coche es: ".$coche->getvel()."<br/>";

$coche->setColor('Yellow');

echo "<br/>El color del coche es: ".$coche->getColor()."<br/>";

$coche->acelerar(80);
$coche->frenar(-15);

echo "<br/>La velocidad del coche es: ".$coche->getvel()."<br/>";

//CREAR MÁS OBJETOS CON LA MISMA CLASE

$coche2 = new Coche;
$coche->setColor('Green');
$coche->setModel('Scuderia');

var_dump($coche2);
var_dump($coche);
