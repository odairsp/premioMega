<?php

namespace App\classes;

use App\Interfaces\JogoInterface;

class JogoQuina implements JogoInterface
{
    public function create()
    {
        return "QUINA";
    }
}