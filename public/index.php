<?php
//AUTOLOAD DE CLASSES DO COMPOSER
require '../vendor/autoload.php';

//DEPENDENCIAS DO PROJETO
use \App\Caixa\Loteria;
$resultado = Loteria::consultarResultado("megasena");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>INDEX</h2>


<pre><?= var_dump(lerArquivo('../app/files/megasena.csv'))?></pre>


<body>

</body>

</html>