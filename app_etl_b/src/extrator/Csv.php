<?php

namespace src\extrator;

use App\Arquivo;

class Csv extends Arquivo
{
    public function LerArquivo(string $caminho): void  {
        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false)
        {
            $this->setDados($linha[0], $linha[1],$linha[2]);
        }

        fclose($handle);
    }

}