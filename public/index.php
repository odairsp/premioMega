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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Mega-Sena</title>
</head>

<body>
    <header>
        <div class="">
            <!-- <div class=" mb-5 mt-3">
                <label for="search">Digite seu bilhete</label>
                <input type="text" name="search" id="search">
            </div> -->
            <div class="">
                <?php for ($num = 1; $num <= 60; $num++) : ?>
                <input id=<?= "num" . $num ?> class="number" type="submit" value=<?= $num ?> onclick="clicar(this.id)">
                <?php endfor ?>
            </div>
        </div>
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

                                <th colspan="6">Numeros Sorteados</th>
                            </tr>
                        </thead>
                        <tbody class="table text-center">

                            <?php
                            $resultados = (array) todosResultados();
                            krsort($resultados);
                            foreach ($resultados as $value) : ?>
                            <tr id=<?= "linha" . $value[0] ?>>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="./js/scripts.js"></script>

</body>

</html>