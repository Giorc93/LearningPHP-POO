<?php

class Coche{
    
    //Atributos o Propiedades (Variables)
    
    //Public: Podemos acceder a él desde cualquier lugar, dentro de la clase actual,
    //        de clases que hereden ésta clase o fuera de ésta clase.
    public $color;
    
    //Public: Podemos acceder a él desde la clase que los define y
    //        de clases que hereden ésta clase o fuera de ésta clase.
    protected $modelo;
    
    //Public: Unicamente podemos acceder desde ésta clase.
    private $velocidad;
    
    
    
    public $marca;
    public $hp;
    public $plazas;
    
    //Constructores
    public function __construct($color, $modelo, $velocidad, $marca, $hp, $plazas) {
        
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->marca = $marca;
        $this->hp = $hp;
        $this->plazas = $plazas;
    }
    
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
    
    public function getModel(){
        return $this->modelo;
    }

    public function frenar($vel){
    $this->velocidad -= $vel;
    }
    
    public function getVel(){
        return $this->velocidad;
    }
    
    public function mostrarInfo(Coche $objeto) {    //Establece la clase Coche como condición del objeto.
        
        if(is_object($objeto)){
        $info = "<h1>Información del Coche</h1>";
        $info .= "Modelo: ".$objeto->modelo."<br/>";
        $info .= "Color: ".$objeto->color."<br/>";
        $info .= "Velocidad: ".$objeto->velocidad."<br/>";
        }else{
            $info = "Tu dato es: $objeto";
        }
        return $info;
    }
}