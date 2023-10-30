<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();


/*
echo "<h3>Com SRP </h3>";
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();


echo "<br />";
print_r($carrinho1->exibirItens());
echo "Valor total recalculado: ".$carrinho1->exibirValorTotal();

echo "<br />";
echo "status: " . $carrinho1->exibirStatus();
*/