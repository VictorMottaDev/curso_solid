<?php

require __DIR__."/vendor/autoload.php";



use App\Retangulo;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> Area do retangulo: '.$retangulo->getArea().'</h3>';