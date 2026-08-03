<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>

<body>
    <h1>Trabalhando com Arrays</h1>
    <hr>
    <h2>Array numérico/indexado</h2>

    <?php
    // Sintaxe 1: usando colchetes
    $bandas = ["Savatage", "Iron Maiden", "Slayer", "Nightwish"];

    // Sintaxe 2: usando a função array()
    $cursos = array("Excell", "JavaScript", "Games 2D", "PHP");

    // Array heterogeneo (tipos de dados mistos/variados)
    $coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487, true];

    //Array com costante
    const FRUTAS = ["morango", "abacaxi"];
    define("FILIAIS", ["São Paulo", "Rio de Janeiro"]);
    ?>

    <h3>Acessando dados de arrays indexados/numéricos</h3>
    <ul>
        <li>Banda que mais gosto: <?= $bandas[3] ?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos[0] ?></li>
        <li>Estamos estudando no <?= $coisas[2] ?></li>
        <li>Estamos na unidade da cidade de <?= FILIAIS[0] ?></li>
    </ul>

    <h2>Array associativo</h2>
    <p>Lista de dados baseada em uma chave associativa (na prética, é um nome/indentificação que tu dá), e um valor para ela (o dado em si).</p>

    <?php
    $curso = [
        // chave associativa => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 800,
        "descricao" => "Aprender a esquentar a água pra fazer miojo"
    ];

    const EMPRESA = [
        "nome" => "Birinbinha Soluções em TI",
        "ramo" => "tecnologia",
        "fundacao" => "31/02/2026"
    ];
    ?>

    <h3>Acessando dados de array associatio</h3>
    <p>Nome do curso: <b><?= $curso["titulo"] ?></b></p>
    <p>CH: <b><?= $curso["carga_horaria"] ?> horas</b></p>
    <p>Descrição: <b><?= $curso["descricao"] ?></b></p>
    <p>Prestadora de serviços: <i><?= EMPRESA["nome"] ?></i></p>

    <h2>Arrays de arrays (Matrizes)</h2>
    <?php
    //Matriz de arrays indexados
    $planosDeEstudos = [
        ["JS Avançado", "Node.js", "Next.js"],
        ["PHP Avançado", "Orientações a Objetos"],
        ["Teoria das Cores", "Photoshop", "Canva", "UX/UI"]
    ];

    // Matriz de arrays acossiativos
    $clientes = [
        [
            "nome" => "Gabriel",
            "me_devendo" => 1000
        ],
        [
            "nome" => "Messias",
            "me_devendo" => 500
        ]
    ];

    ?>

    <h3>Acessando dados de matriz de arrays indexados</h3>
    <p>Meu foco agora é no <?= $planosDeEstudos[1][0] ?></p>
    <p>0 <?= $clientes[0]["nome"] ?> me deve <?= $clientes[0]["me_devendo"] ?></p>

    <h2>Funções de análise/debug de estruturas de dados (arrays, objetos)</h2>
    <?php
    // echo $bandas; // não funciona, pois o echo não consegue exibir arrays
    ?>
    <h3><code>print_r()</code></h3>
    <pre><?php print_r($bandas) ?></pre>
    <pre><?php print_r($planosDeEstudos) ?></pre>

    <h3><code>var_dump()</code></h3>
    <pre><?php var_dump($bandas) ?></pre>

    <pre><?php var_dump($curso) ?></pre>
    <pre><?php var_dump(EMPRESA) ?></pre>
    <pre><?php var_dump($coisas) ?></pre>
    <pre><?php var_dump($clientes) ?></pre>
    <pre><?php var_dump($planosDeEstudos) ?></pre>
</body>

</html>