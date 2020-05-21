<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Gio";
        $this->email = "Giorc93@hotmail.com";
    }
}
