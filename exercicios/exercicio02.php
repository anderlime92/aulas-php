<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02: estruturas de dados com arrays e objetos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        article {
            padding: 2px;
            border: solid 1px;
            width: 40%;
        }

        .container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <h1>Estrutura de dados cadastrais</h1>
    <hr>

    <?php

    $usuario1 = [
        "nome" => "Beltrano",
        "email" => "beltrano@hotmail.com",
        "senha" => "456MNO",
        "idade" => 46,
        "sexo" => "masc",
        "cidade" => "Rio de Agosto"
    ];

    $usuario2 = new stdClass;

    $usuario2->nome = "Fulana";
    $usuario2->email = "fulana@hotmail.com";
    $usuario2->senha = "FGH890";
    $usuario2->idade = 29;
    $usuario2->sexo = "femi";
    $usuario2->cidade = "Uberabeira"
    ?>

    <h2>Dados de usuários</h2>
    <hr>

    <article>

    </article>

    //Correção
    <h1>Exercicio 02 (corrigido)</h1>
    <hr>

    <?php
    // faça um array associativo
    $usuario1 = [
        "nome" => "Beltrano", // chave associativa ""
        "email" => "beltrano@hotmail.com",
        "senha" => "456MNO",
        "idade" => 46,
        "sexo" => "masc",
        "cidade" => "Rio de Agosto"
    ];
    //var_dump($usuario1);

    // e um objeto genérico
    $usuario2 = new stdClass;

    $usuario2->nome = "Fulana";
    $usuario2->email = "fulana@hotmail.com";
    $usuario2->senha = "FGH890";
    $usuario2->idade = 29;
    $usuario2->sexo = "femi";
    $usuario2->cidade = "Uberabeira"
    ?>

    <!-- Em seguida, mostre apenas os valores de nome de usuario, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article ou section, além de h2, p etc).
 
🔥Desafio: destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando Flexbox. -->

    <!-- Dados de usuário1 (array associativo): Veja o uso dos colchetes e das chaves associativas -->
    <article>
        <h2><?= $usuario1['nome'] ?></h2>
        <p>E-mail: <?= $usuario1["email"] ?></p>
        <p>Idade: <?= $usuario1['idade'] ?> anos</p>
    </article>

    <!-- Dados de usuario2 (objeto): Veja o uso da setinha e das propriedades -->

    <article>
        <h2><?= $usuario2->nome ?></h2>
        <p>E-mail: <?= $usuario2->email ?></p>
        <p>Idade: <?= $usuario2->idade ?> anos</p>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>