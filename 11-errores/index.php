<?php

//Capturar excepciones en código suscpetible a errores;
try{
    
    if(isset($_GET['id'])) {
        echo "<h1>El parámetro es: {$_GET['id']} </h1>";
    }else{
        throw new Exception('Faltan parámetros en la URL');
    }
    
} catch (Exception $ex) {
    echo 'Ha ocurrido un error: '.$ex->getMessage();
}

