<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04: estruturas de repetição (loops) e estruturas de dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <h1>Linguagens de programação</h1>
    <?php
    $linguagens = ["HTML", "CSS", "JS", "PHP", "SQL"]
    ?>
    <ol>
        <?php for ($i = 0; $i < count($linguagens); $i++) { ?>
            <li> <?= $linguagens[$i] ?> </li>
        <?php } ?>
    </ol>

    <?php $linguagens = [
    [
    "id" => "1",
    "nome" => "HTML",
    "descrição" => "Estruturação"
    ],
    [
    "id" => "2",
    "nome" => "CSS",
    "descrição" => "Estilos"
    ],
    [
    "id" => "3",
    "nome" => "JS",
    "descrição" => "Comportamentos"
    ],
    [
    "id" => "4",
    "nome" => "PHP",
    "descrição" => "Back-End"
    ],
    [
    "id" => "5",
    "nome" => "SQL",
    "descrição" => "Manipulação de Dados"
    ],
    ]; ?>
    



    <table class="table table-dark table-striped">
  ...
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>