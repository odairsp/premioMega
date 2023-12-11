<?php

namespace App\classes;

use App\classes\arquivo\LerArquivo;

class VerificaSeGanhou
{
    private $jogos;
    private $jogo;


    public function __construct(array $jogo)
    {
        $this->jogos = LerArquivo::lerArquivo("../" . RESULTADOS_PATH);
        $this->jogo = $jogo;
    }

    public function verifica(): bool
    {
        $resultado = in_array($this->jogo, array_map(fn ($array) => array_slice($array, 1), $this->jogos));
        return $resultado;
    }
}