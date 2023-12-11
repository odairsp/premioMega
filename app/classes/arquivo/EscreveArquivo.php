<?php

namespace App\classes\arquivo;



class EscreveArquivo
{
    public function escreverFinal(string $texto, $arquivo)
    {
        $resultados = fopen($arquivo, 'a');
        fwrite($resultados, $texto . "\n");
        fclose($resultados);
    }
}