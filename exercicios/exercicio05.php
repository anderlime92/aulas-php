<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05: funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Tabela de Avaliação</h1>
    <hr>

    <?php
        function notasAluno()
        {
            echo "<h4> Fulano </h4>";
            echo "<h4> Ciclano </h4>";
            echo "<h4> Beltrano </h4>";
        }
    ?>

    <?php 
    function notasAluno(int $valor):string {
        if ($valor < 0) return "é negativo";
        return "não é negativo";
    }
    ?>

    <p>Número 10: <?= verificarNegativo(10) ?></p>
    <p>Número -10: <?= verificarNegativo(-10) ?></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>