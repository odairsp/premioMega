<?php

use App\Caixa\Loteria;



$arquivo = '../files/resultados.txt';
$resultados = '../files/Mega-Sena.xlsx';


function lerArquivo($arquivo)
{
    $conteudo = fopen($arquivo, 'r');
    $texto = [];
    while ($linha = fgetcsv($conteudo, 5000, ';')) {
        array_push($texto, $linha);
    }

    fclose($conteudo);
    return $texto;
}

function escreverFinal(string $texto, $arquivo)
{
    $resultados = fopen($arquivo, 'a');
    fwrite($resultados, $texto . "\n");
    fclose($resultados);
}

function todosResultados()
{
    $path = '../' . RESULTADOS_PATH;

    $ultimo =  Loteria::consultarResultado('megasena');
    $resultados = lerArquivo($path);
    // var_dump($ultimo);
    if ($ultimo['numero'] != count($resultados)) {

        $numerosSorteados = $ultimo['dezenasSorteadasOrdemSorteio'];
        foreach ($numerosSorteados as $key => $value) {
            $numerosSorteados[$key] = (int) $value;
        }
        sort($numerosSorteados);

        $texto = implode(';', array_merge([$ultimo['numero']], $numerosSorteados));

        escreverFinal($texto, '../' . RESULTADOS_PATH);
    } else {

        $resultados = array_filter(lerArquivo($path));
    }
    return lerArquivo($path);;
}
