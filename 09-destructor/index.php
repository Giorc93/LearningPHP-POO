<?php

class Usuario {
    public $nombre;
    public $apellidos;
    
    
    public function __construct() {
        
        $this->nombre = "Gio";
        $this->email = "giorc93@hotmail.com";
        
        echo "Instancia del objeto creada <br/>";
    }
    
    public function __toString() {
        return " Hola, {$this->nombre}.Estás registrado con éste E-mail: {$this->email}";
    }

        public function __destruct() {
        echo "<br/>Instancia del objeto destruida";
    }
}

$usuario = new Usuario;
echo $usuario->email;
echo $usuario;