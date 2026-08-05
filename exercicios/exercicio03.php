<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03: condicionais e uso do PHP intercalado com HTML</title>
    <style>
        section {
            padding: 4px;
            margin: auto;
            width: 50%;
            border: solid 1px;
        }

        .infantil {
            background-color: pink;
        }

        .adulto {
            background-color: greenyellow;
        }

        .melhor-idade {
            background-color: plum;
        }
    </style>
</head>

<body>
    <h1>Valores de ingresso para diversas faixas etárias</h1>

    <?php
    $idade = 30;

    const ingressoInfantil = 25.00;
    const ingressoAdulto = 40.00;
    const ingressoMelhor = 20.00;
    ?>

    <?php
    if ($idade <= 12) {
        $categoria = "criança";
    } elseif ($idade <= 59) {
        $categoria = "adulto";
    } else {
        $categoria = "melhor";
    }
    ?>

    <!-- Correção -->
    <?php
    $idade = 30;

    if ($idade < 12) {
        $ingresso = 25.00;
        $categoria = "Infantil";
        $estilo = "infantil";
    } else if ($idade < 60) {
        $ingresso = 40.00;
        $categoria = "Adulto";
        $estilo = "adulto";
    } else {
        $ingresso = 20.00;
        $categoria = "Melhor Idade";
        $estilo = "melhor-idade";
    }
    ?>

    <!-- Veja: usamos PHP para definir a classe -->
    <section class="<?= $estilo ?>">
        <h2>Categoria: <?= $categoria ?> </h2>
        <p>Idade: <b><?= $idade ?></b></p>
        <p>Preço: R$ <?= number_format($ingresso, 2, ",", ".") ?></p>
    </section>

</body>

</html>