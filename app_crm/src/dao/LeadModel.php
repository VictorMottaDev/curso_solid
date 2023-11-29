<?php

namespace src\dao;

use src\interfaces\INotificacao;
use src\componentes\Notificacao;
use src\dao\BD;
use src\interfaces\ICadastro;

class LeadModel extends BD implements ICadastro, INotificacao {
    public function salvar()
    {

    }

    public function enviarNotificacao(Notificacao $notificacao)
    {

    }
}