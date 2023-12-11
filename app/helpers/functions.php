<?php

use App\Caixa\Loteria;
use PhpParser\Node\Stmt\TryCatch;

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
    $ultimo =  Loteria::consultarResultado('megasena')['numero'];
    $resultados = lerArquivo($path);
    $num = (int) end($resultados)[0];
    $cont = 0;
    if (($ultimo > $num)) {

        while ($ultimo > $num) {
            $cont++;
            $num += 1;

            $ultimoRes =  Loteria::consultarResultado('megasena/' . $num);
            if (array_key_exists('dezenasSorteadasOrdemSorteio', $ultimoRes)) {
                $numerosSorteados = $ultimoRes['dezenasSorteadasOrdemSorteio'];
                if ($numerosSorteados) {
                    foreach ($numerosSorteados as $key => $value) {
                        $numerosSorteados[$key] = (int) $value;
                    }
                    //sort($numerosSorteados);

                    $texto = implode(';', array_merge([$ultimoRes['numero']], $numerosSorteados));

                    escreverFinal($texto, '../' . RESULTADOS_PATH);
                }
            }
        }
    } else {

        $resultados = array_filter(lerArquivo($path));
    }

    return lerArquivo($path);;
}