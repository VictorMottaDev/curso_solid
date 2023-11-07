<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;


$carrinho1 = new CarrinhoCompra();
echo "<h3>Com SRP </h3>";

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