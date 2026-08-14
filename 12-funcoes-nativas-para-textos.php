<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para texto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Funções nativas para texto</h1>
        <hr>

        <!-- mb -> multbyte: permite trabalhar com acentos, caracteres especiais, cedilha -->

        <h2>mb_strlen()</h2>

        <?php
        $texto = "Uma frase qualquer, com acentos e cedilha: ação, ciência";
        ?>
        <p>String do exemplo: <?= $texto ?></p>
        <p>Tamanho da string: <?= mb_strlen($texto) ?></p>

        <h2>mb_strtoupper()</h2>
        <p>Conversão para maiúsculas: <?= mb_strtoupper($texto) ?></p>

        <h2>mb_strtolower()</h2>
        <p>Conversão para minúsculas: <?= mb_strtolower($texto) ?></p>

        <h2>str_replace() ou str_ireplace()</h2>
        <?php $frase = "Esta é uma frase com palavras feias, como burro, idiota, chato demais e outras palavras ruins (bobo, panaca etc)! Chato mesmo! BOBO pra caramba. Também é um BOBÃO.";

        // Procurando por UMA palavra e substituindo por outra

        $frasesComSubstituicaoDePalavra = str_replace("bobo", "cara legal", $frase);
        ?>

        <p><mark>Frase original: <?= $frase ?></mark></p>
        <p>Frase com subtituição de palavra: <?= $frasesComSubstituicaoDePalavra ?></p>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>