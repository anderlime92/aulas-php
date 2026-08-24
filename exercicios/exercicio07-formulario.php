<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio07-formulario.php</title>
</head>
<body>
    <div>
        <h1>Simulação e manipulação de dados a partir de formulário</h1>
        <hr>

        <form action="" method="post">
                <div class="mb-3">
                    <label for="produto" class="form-label">Produto:</label>
                    <input type="text" class="form-control" name="produto" id="produto">
                </div>
                <div class="mb-3">
                    <label for="fabricante" class="form-label">Fabricante:</label>
                    <input type="fabricante" class="form-control" name="fabricante" id="fabricante">
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço:</label>
                    <input type="preco" class="form-control" name="preco" id="preco">
                </div>
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade:</label>
                    <input type="quantidade" class="form-control" name="quantidade" id="quantidade">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

        
    </div>
    <?php 
    
    ?>
</body>
</html>