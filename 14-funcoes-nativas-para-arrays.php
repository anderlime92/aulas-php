<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Arrays</title>
</head>

<body>
    <div class="container">
        <h1>Funções nativas para arrays</h1>
        <hr>
        <h2>implode()</h2>
        <p>transforma array em uma string.</p>
        <?php 
        $arrayBandas = ["Pink Floyd", "Genisis", "Yes"];
        $textoBandas = implode("-", $arrayBandas); ?>
        <pre><?php var_dump($arrayBandas) ?></pre>
        <pre><?php var_dump($textoBandas) ?></pre>

        <hr>

        <h2>extract()</h2>
        <p>Extrai chaves associativas para variáveis.</p>
        <?php 
        $nome = "Beltrano"

        $aluno = ["id" => 1, "nome" => "Fulano", "idade" => 25];
        extract($aluno, EXTR_PREFIX_ALL, "chave");
        // Usamos o segundo parâmetro para definir um prefixo para os nomes
        // Isso evita conflito/sobreescrita de outras variáveis
        ?>
        <ul>
            <li>ID: <?= $chave_id ?></li>
            <li>Nome: <?= $chave_nome ?></li>
            <li>Idade: <?= $chave_idade ?></li>
        </ul>
        <p>Variável <code>$nome</code> original: <?= $nome ?></p>

        <hr>

        <h2>array_sum()</h2>
        <p>Somando os valores de um array.</p>
        <?php 
        $carrinhoDeCompras = [
            "TV_Led" => 1200,
            "Ultrabook" => 2500,
            "Geladeira" => 3000
        ];
        $total = array_sum($carrinhoDeCompras);
        ?>
        <p>Total: <?= $total ?></p>

        <hr>

        <h2>arrat_unique()</h2>
        <p>Gera um novo array removendo elementos duplicados/repetidos em um array.</p>
        <?php 
        $categorias = [
            "Eletrônicos", "Livros", "Roupas", "Livros", "Games", "Eletrônicos"
        ];

        $categoriasUnicas = array_unique($categorias);
        ?>
        <pre><?php var_dump($categorias) ?></pre>
        <pre><?php var_dump($categoriasUnicas) ?></pre>

        <h2>array_merge()</h2>
        <p>Junta dados de arrays diferentes.</p>
        <?php 
        $produtosFilialNorte = ["Mouse", "Teclado"];
        $produtosFilialSul = ["Monitor", "Webcam", "Pendrive"];

        // $produtos = array_merge($produtosFilialNorte, $produtosFilialSul);
        // Podemos combinar funções de array (abaixo, merge e depois unique)
        $produtos = array_unique(
            array_merge($produtosFilialNorte, $produtosFilialSul)
        );
        ?>
        <pre><?php var_dump($produtos) ?></pre>

        <hr>
        <h2>array_combine()</h2>
        <p>Cria um novo array a partir de uma lista de valores e uma lista de chaves.</p>
        <?php 
        // Lista de chaves
        $games = ["Super_Mario", "Sonic", "Final_Fantasy"];

        // Lista de valores
        $preços = [99, 50, 129];

        $catalogo = array_combine($games, $preços);
        ?>
        <pre><?php var_dump($catalogo) ?></pre>

        <hr>
        <h2>array_map()</h2>
        <p>Percorre cada elemento de um array, executa uma função (chamada de callback) e gera um novo array com os resultados.</p>
        <?php 
        $catalogoComDesconto = array_map(function(float $preço):float {
            return $preço - $preço * 0.10;
        }, $catalogo);
        ?>
        <pre><?php var_dump($catalogoComDesconto) ?></pre>

        <hr>
    </div>
</body>

</html>