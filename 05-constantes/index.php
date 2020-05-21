<?php

class Usuario {
    
    const URL_COMPLETA = "http://localhost";            //Definir constante
    public $email;
    public $password;
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}

//$user = new Usuario();
//echo $user::URL_COMPLETA;       //Acceder a la variable estática.
//var_dump($user);

echo Usuario::URL_COMPLETA;