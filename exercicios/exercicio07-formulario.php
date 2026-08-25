<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 FORMULÁRIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Exercício 07 FORMULÁRIO</h1>
    <hr>
    <form action="exercicio07-processamento.php" method="post">
        <!-- Produto -->
        <div class="mb-3">
            <label class="form-label" for="produto">Produto:</label>
            <input class="form-control" type="text" name="produto" id="produto" required>
        </div>
        
        <!-- Fabricante -->
        <div class="mb-3">
            <label class="form-label" for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" class="form-select">
                <option value="" selected disabled></option>
                <option value="dell">Dell</option>
                <option value="microsoft">Microsoft</option>
                <option value="motorola">Motorola</option>
                <option value="lg">LG</option>
            </select>
        </div>

        <!-- Preço -->
        <div class="mb-3">
            <label class="form-label" for="preco">Preço:</label>
            <input class="form-control" type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </div>
        
        <!-- Quantidade -->
        <div class="mb-3">
            <label class="form-label" for="quantidade">Quantidade:</label>
            <input class="form-control" type="number" name="quantidade" id="idade" min="0" max="1000" step="1">
        </div>

        <button type="submit" class="btn btn-primary">
            Enviar dados
        </button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>