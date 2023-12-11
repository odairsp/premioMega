<?php

namespace App\classes;

use App\Interfaces\JogoInterface;

class JogoMegaSena implements JogoInterface
{
    private $numeros = [];

    public function create()
    {

        return "MEGASENA ";
    }
}