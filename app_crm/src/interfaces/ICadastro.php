<?php
namespace src\interfaces;


interface ICadastro {
    public function salvar();
    public function registrarLog();
    public function enviarNotificacao();
}