<?php

namespace src\dao;

use src\componentes\Log;
use src\componentes\Notificacao;
use src\dao\BD;
use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {
    public function salvar()
    {

    }

    public function registrarLog(Log $log)
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {

    }
}