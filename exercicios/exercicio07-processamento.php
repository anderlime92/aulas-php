<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento - Exercício 07</title>
</head>
<body>
    <div>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $produto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            $quantidade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

            if (empty($produto)) $erros[] = "Qual produto?";
            if (empty($fabricante)) $erros[] = "Selecione o fabricante.";
            if (empty($preco)) $erros[] = "Qual valor?";
            if (empty($quantidade)) $erros[] = "Qual a quantidade?";
            

            if (!filter_var($fabricante, FILTER_VALIDATE_EMAIL)) $erros[] = "Fabricante não encontrado.";

            $erros = [];

            $filtroPreco = [
                "options" => [
                    "min_range" => 100,
                    "max_range" => 10000,
                ]
            ];

            $filtroQuantidade = [
                "options" => [
                    "min_range" => 0,
                    "max_range" => 1000,
                ]
            ];

            if (!filter_var($preco, FILTER_VALIDATE_INT, $filtroPreco)) {
                $erros[] = "Preço não correspondente. Valor mínimo de 100 e valor máximo de 10000";
            }

            if (!filter_var($quantidade, FILTER_VALIDATE_INT, $filtroQuantidade)) {
                $erros[] = "Quantidade não correspondente. Valor mínimo de 0 e valor máximo de 1000";
            }

            if (!empty($erros)):
        ?>
                <div class="alert alert-danger">
                    <h2>Erros encontrados:</h2>
                    <ul class="mb-3">
                        <?php foreach ($erros as $error): ?>
                            <li> <?= $error ?> </li>
                        <?php endforeach ?>
                    </ul>
                    <a href="exercicio07-formulario.php" class="btn btn-warning">Voltar para a ficha cadastral</a>
                </div>
            <?php else: ?>

                <h2>Dados recebidos</h2>
                <p>Nome: <?= $produto ?></p>
                <p>E-mail: <?= $fabricante ?></p>
                <p>Idade: <?= $preco ?></p>
                <p>Mensagem: <?= $quantidade ?></p>

                <?php
            endif;
        } else {
            ?>
            <!-- Acesso inválido (usuário não veio do formulário) -->
            <div class="alert alert-danger">
                <h2>Acesso inválido!</h2>
                <p>Você deve usar a ficha de cadastro para enviar os dados.</p>
                <hr>
                <a href="exercicio07-formulario.php" class="btn btn-primary">Ir para o formulário.</a>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>