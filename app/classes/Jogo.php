<?php


namespace App\classes;


use App\classes\JogoMegaSena;
use App\Interfaces\JogoInterface;


class Jogo
{
    private $jogo;

    public function __construct(JogoInterface $jogo)
    {
        $this->jogo = $jogo;
    }

    public function novoJogo(array $parametros)
    {
        return $this->jogo->create($parametros);
    }
}