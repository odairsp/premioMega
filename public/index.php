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
<h2>Resultados</h2>


<?php
$resultados = (array) todosResultados();
krsort($resultados);

foreach ($resultados as $value) : ?>

    Concurso - <?= $value[0] ?> =>

    <?php foreach (array_slice($value, 1) as $num) : ?>

        <?= $num ?>

    <?php endforeach ?>
    <br>


<?php endforeach ?>


<body>

</body>

</html>