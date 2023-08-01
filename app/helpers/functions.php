<?php
$arquivo = '../files/resultados.txt';


function lerArquivo($arquivo){
    $conteudo = fopen($arquivo, 'r');
    $texto = file_get_contents($conteudo);
    fclose($conteudo);
    return $texto;
}

function escreverFinal(string $texto, $arquivo){
    $resultados = fopen($arquivo, 'a');
    fwrite($resultados, $texto);
    fclose($resultados);
}





