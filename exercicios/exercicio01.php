<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 PHP</title>
    <style>
        .destaque {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Exercício 01 PHP</h1>
    <hr>

    <?php
    $data = "29/07/2026";
    $nome = "Ciclano";
    $curso = "Games";
    $cargaHora = 100;
    $limiteFaltas = $cargaHora / 4;

    echo "<p>No dia: " . $data . ", o aluno " . $nome . " engressou em " . $curso . ". A carga horária estabelecida de " . $cargaHora . " possui um limite de: " . $limiteFaltas . " horas.</p>";
    ?>

    <!-- Correção -->

    <h1>Exercício 01 PHP (corrigido)</h1>

    <?php
    $data = "29/07/2026";
    const NOME = "Tiago"; // ou define()
    $curso = "Games";
    $cargaHoraria = 1000;
    $limite = $cargaHoraria * 0.25;

    // Gerar via PHP a saída HTML
    echo "<p class='destaque'>Aluno: " . NOME . " </p>";
    echo "<p><b>Curso: </b>$curso</p>"; // interpolação
    ?>

    <!-- Forma simplificada de saída HTML: usando PHP onde precisa -->

    <p class="destaque">Aluno: <?= NOME ?></p>
    <p><b>Curso: </b><?= $curso ?></p>
    <ul>
        <li>Carga Horária: <?= $cargaHoraria ?> horas</li>
        <li>Limite de faltas: <?= $limite ?> horas</li>
    </ul>

    <?php
    $teste = "cruffin";
    echo $teste;
    ?>

    <p class="destaque">Teste <?= $teste ?> </p>

</body>

</html>