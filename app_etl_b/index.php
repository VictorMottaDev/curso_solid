<?php

require __DIR__."/vendor/autoload.php";
//echo "foi\n";

use App\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();



echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';
