<?php

namespace src\extrator;

use App\Arquivo;

class Txt extends Arquivo
{

    public function lerArquivo(string $caminho): void {
        $handle = fopen($caminho, 'r');

        while(!feof($handle))
        {
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30),
                substr($linha, 0, 11),
                substr($linha, 41, 50)
            );
        }

        fclose($handle);
    }
    
}