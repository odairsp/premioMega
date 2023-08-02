<?php

use App\Caixa\Loteria;



$arquivo = '../files/resultados.txt';
$resultados = '../files/Mega-Sena.xlsx';


function lerArquivo($arquivo)
{
    $conteudo = fopen($arquivo, 'r');
    $texto = [];
    while ($linha = fgetcsv($conteudo, 5000, ';')) {
        $texto['n-'.$linha[0]] = (object) array_splice($linha,1);
    }

    fclose($conteudo);
    return $texto;
}

function escreverFinal(string $texto, $arquivo)
{
    $resultados = fopen($arquivo, 'a');
    fwrite($resultados, $texto);
    fclose($resultados);
}

function todosResultados()
{

    $ultimo = Loteria::consultarResultado('megasena');

    $resultados = [];

    for ($i = 1; $i <= 10; $i++) {
        $texto = Loteria::consultarResultado("megasena/{$i}");
        array_push($resultados, $texto['dezenasSorteadasOrdemSorteio']);
    }


    return $resultados;
}