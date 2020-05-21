<?php

require 'coche.php';

$coche1 = new Coche('Amarillo','Camaro SS', 270, 'Chevrolet', 300, 1);
$coche2 = new Coche('Negro','Mustang', 270, 'Ford', 300, 1);
$coche3 = new Coche('Rojo','Gallardo', 270, 'Lamborghini', 300, 1);
$coche4 = new Coche('Naranja','Viper', 270, 'Dodge', 300, 1);
$coche5 = new Coche('Gris','Raptor', 270, 'Ford', 300, 1);

$coche1->color = 'Rojo';

$coche1->setModel('Camaro 86');

echo $coche5->mostrarInfo($coche1);

//var_dump($coche1->getModel());
//var_dump($coche1->modelo);

//var_dump($coche1);

//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);
//var_dump($coche4);
//var_dump($coche5);

