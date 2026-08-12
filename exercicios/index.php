<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio Bootstrap com JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="container" style="max-width: 500px;">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody id="tabela-corpo">
                <!-- O loop do JavaScript inserirá as linhas aqui -->
            </tbody>
        </table>
    </div>

    <script>
        // Estrutura de dados (Array de Objetos)
        const linguagens = [
            { id: 1, nome: "HTML", descricao: "Estruturação" },
            { id: 2, nome: "CSS", descricao: "Estilos" },
            { id: 3, nome: "JS", descricao: "Comportamentos" },
            { id: 4, nome: "PHP", descricao: "Back-End" },
            { id: 5, nome: "SQL", descricao: "Manipulação de dados" }
        ];

        const tbody = document.getElementById("tabela-corpo");

        // Loop iterando sobre a estrutura de dados
        linguagens.forEach(lang => {
            const linha = `
                <tr>
                    <td>${lang.id}</td>
                    <td>${lang.nome}</td>
                    <td>${lang.descricao}</td>
                </tr>
            `;
            tbody.innerHTML += linha;
        });
    </script>
</body>
</html>