<?php

namespace App\classes\arquivo;

class LerArquivo
{
    static public function lerArquivo(String $arquivo)
    {
        $conteudo = fopen($arquivo, 'r');
        $texto = [];
        while ($linha = fgetcsv($conteudo, 5000, ';')) {
            array_push($texto, $linha);
        }

        fclose($conteudo);
        return $texto;
    }
}