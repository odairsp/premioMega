<?php

use App\classes\Jogo;
use App\classes\JogoMegaSena;
use App\classes\JogoQuina;
use App\classes\VerificaSeGanhou;

require '../vendor/autoload.php';

$jogo = new VerificaSeGanhou([8, 19, 21, 36, 41, 59]);
var_dump($jogo->verifica());