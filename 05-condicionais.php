<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
</head>

<body>
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>

    <!-- Lembrete: ao usar condicionais, muitas vezes também usaremos operadores relacionais:  <,  <=,  >,  >=,  ==,  !=,  ===,  !== -->
    <h2>Condicional SIMPLES: <code>if</code></h2>

    <?php
    $numero = 50;

    // Estrutura tradicional (comando, parênteses, chaves)
    if ($numero > 10) {
        echo "<p>$numero é maior que 10.</p>";
    }

    //estrutura abreviada (sem chaves)
    if ($numero > 10) echo "<p>$numero é maior que 10.</p>";

    // Estrutura alternativa (sem chaves, com operadores)
    if ($numero > 10):
        echo "<p>$numero é maior que 10.</p>";
    endif;

    ?>
</body>

</html>