<?php
//AUTOLOAD DE CLASSES DO COMPOSER
require '../vendor/autoload.php';

//DEPENDENCIAS DO PROJETO

use \App\Caixa\Loteria;


$resultado = Loteria::consultarResultado("megasena");
