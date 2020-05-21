<?php

require_once 'autoload.php';

//$usuario = new Usuario();
//echo $usuario->nombre;  
//echo "<br/>";
//echo $usuario->email;

//ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    public function Informacion() {
        echo __CLASS__;
        echo __DIR__;
        echo __FILE__;
        echo __FUNCTION__;
        echo __LINE__;
        echo __METHOD__;
        echo __NAMESPACE__;
        echo __TRAIT__;
    }
}

//Objeto de otro paquete
//$usuario = new UsuarioAdmin();
//var_dump($usuario);


//Objeto Principal
$principal = new Principal();
$principal->Informacion();
$metodos = get_class_methods($principal);
//var_dump($principal->usuario);
$busqueda = array_search('setEntrada', $metodos);
echo var_dump($busqueda);
//Comprobar existencia de clase                     //Para verificar si un nombre de clase no existe sin error, utilizar include en lugar de require_once y empleando un @ antes de class_exists para evitar errores 
$clase = class_exists('PanelAdministrador\Usuario');

if($clase == true){
    echo "<h1>La clase SI existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";
}