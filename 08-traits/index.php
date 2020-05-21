<?php

//Trait: Permite definir una serie de metodos para compartirlos entre diferentes clases

trait Utilidades{
    public function mostrarNombre() {
        echo "<h1>El nombre es: ".$this->nombre."</h1>";
    }
}

class Coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class VideoJuego {
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche;
$persona = new Persona;
$juego = new VideoJuego();

$persona->nombre = "Don Chimbo";
$persona->mostrarNombre();

$coche->nombre = "Ferrari Mi Chimbo";
$coche->mostrarNombre();

$juego->nombre = "Call Of Chimbo";
$juego->mostrarNombre();