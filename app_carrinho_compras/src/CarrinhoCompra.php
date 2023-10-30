<?php

namespace App;

class CarrinhoCompra {

    private $itens;
    private $status;
    private $valorTotal;

    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens() {
        return $this->itens;
    }

    public function adiiconarItem(string $item, float $valor){
        array_push($this->itens, ["item" => $item, "valor" => $valor]);
        $this->valorTotal += $valor;
    }

    public function exibirValorTotal() {
        return $this->valorTotal;
    }

    public function exibirStatus() {
        return $this->status;
    }

    public function confirmarPedido(){
        $this->status = 'confirmado';
    }
}