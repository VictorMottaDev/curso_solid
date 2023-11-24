<?php

require __DIR__."/vendor/autoload.php";



use App\Retangulo;
use App\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3> Area do retangulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);

echo '<h3> Area do quadrado: '.$quadrado->getArea().'</h3>';