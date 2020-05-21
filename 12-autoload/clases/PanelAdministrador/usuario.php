<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Andres";
        $this->email = "Andresrc93@hotmail.com";
    }
}
