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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Mega-Sena</title>
</head>

<body>

    <header>

    </header>

    <main>
        <div class="container mt-5">
            <div class="container">
                <h2>Resultados</h2>
                <div class="container">
                    <table class="table table-striped table-bordered">
                        <thead class="table text-center">
                            <tr>
                                <th>Concurso</th>
                                <?php
                                $resultados = (array) todosResultados();
                                krsort($resultados);
                                ?>
                                <?php for ($i = 1; $i <= 6; $i++) : ?>
                                    <th>num -> <?= $i ?></th>
                                <?php endfor ?>

                            </tr>
                        </thead>
                        <tbody class="table text-center">

                            <?php foreach ($resultados as $value) : ?>
                                <tr>
                                    <td><?= $value[0] ?></td>
                                    <?php foreach (array_slice($value, 1) as $num) : ?>
                                        <td><?= $num ?></td>
                                    <?php endforeach ?>

                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>