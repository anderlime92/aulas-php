<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na Memória</title>
    <style>
        .destaque {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>
    <?php
    /* Variáveis */
    $curso = "Técnico em Informática para Internet"; //string
    $ano = 2026; // número inteiro
    $preço = 2112.55; //número real/fracionado, decimal

    /* Constantes (recomenda-se declarar em MAIÙSCULAS)*/
    define("PROPRIETÀRIO", "Fulano de Tal"); //antiga
    const EMPRESA = "ABC Tecnologia"; //moderna
    ?>
    <h2>Exemplos de saídas de dados</h2>
    <?php
    // Usando concatenação: se usa o  .  (ponto final)
    echo "<p>Estou fazendo o curso: " . $curso . " no ano de " . $ano . "</p>";
    echo "<p>Trabalho na empresa " . EMPRESA . "</p>"; // funciona com constante
    echo "<p>Trabalho na empresa <span class='destaque'>" . EMPRESA . "</span></p>";

    // Usando interpolação: se usa obrigatoriamente aspa dupla
    echo "<p>Estou fazendo o curso: $curso no ano de $ano</p>";
    echo "<p>Trabalho na empresa EMPRESA</p>"; // não funciona com/pra constante

    // Com aspas simples, a interpolação não funciona. Aparecem os nomes.
    echo '<p>Estou fazendo o curso: $curso no ano de $ano</p>';
    ?>
    <h2>Exemplos de saídas de dados</h2>
    <h3>Usando a síntaxe abreviada/curta do PHP</h3>

    <!-- Saída abreviada usando trechos de PHP INLINE -->
    <p>Estou fazendo o curso: <?php echo $curso ?> no ano de <?php echo $ano ?> </p>
    <p>Trabalho na empresa <?php echo EMPRESA ?></p>

    <!-- Saída abreviada usando o comando echo através do sinal de igual  =   -->
    <p>Estou fazendo o curso: <?= $curso ?> no ano de <?= $ano ?> </p>
    <p>Trabalho na empresa <?= EMPRESA ?></p>
    <p>Trabalho na empresa <span class="destaque"><?= EMPRESA ?></span></p>
</body>

</html>