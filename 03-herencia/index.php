<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Gio");

var_dump($persona);

$informatico = new Informatico();

$informatico->setAltura(1.90);
$informatico->sabeLeng("PHP, Python, JavaScript");

var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);