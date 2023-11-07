<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo "<h3>Com SRP </h3>";
$pedido = new Pedido();
//---------------------------------------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('lâmpada');
$item2->setValor(10.80);
//---------------------------------------------------------------
echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '<pre>';
//---------------------------------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//---------------------------------------------------------------
echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '<pre>';






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