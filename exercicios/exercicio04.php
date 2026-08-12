<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04: estruturas de repetição (loops) e estruturas de dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        /*tr { background-color: palevioletred ; }*/

        /*Para estilizar as células de uma determinada linha*/
        tr:nth-child(3) td {
            background-color: darkslategrey!important;
        }
        tr:nth-child(4) td {
            text-decoration-line: underline;
        }
    </style>

</head>

<body>
    <h1>Linguagens de programação</h1>

    <?php $linguagens = [
        [
            "Id" => "1",
            "Nome" => "HTML",
            "Descrição" => "Estruturação"
        ],
        [
            "Id" => "2",
            "Nome" => "CSS",
            "Descrição" => "Estilos"
        ],
        [
            "Id" => "3",
            "Nome" => "JS",
            "Descrição" => "Comportamentos"
        ],
        [
            "Id" => "4",
            "Nome" => "PHP",
            "Descrição" => "Back-End"
        ],
        [
            "Id" => "5",
            "Nome" => "SQL",
            "Descrição" => "Manipulação de Dados"
        ],
    ]; ?>

    <ol>
        <?php foreach ($linguagens as $linguagem):

        ?>
            <p><b>Id:</b> <span class="bg-primary-subtle p-1"> <?= $linguagem["Id"] ?></span></p>
            <p><b>Nome:</b> <span class="bg-dark-subtle p-1"> <?= $linguagem["Nome"] ?></span></p>
            <p><b>Descrição:</b> <span class="bg-primary-subtle p-1"> <?= $linguagem["Descrição"] ?></span></p>

        <?php endforeach; ?>
    </ol>


    <table class="table table-dark table-striped">
        ...
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <div>
        <h1>Exercicio 04 (correção)</h1>
        <hr>
        <?php $linguagens = [
            [
                "Id" => "1",
                "Nome" => "HTML",
                "Descrição" => "Estruturação"
            ],
            [
                "Id" => "2",
                "Nome" => "CSS",
                "Descrição" => "Estilos"
            ],
            [
                "Id" => "3",
                "Nome" => "JS",
                "Descrição" => "Comportamentos"
            ],
            [
                "Id" => "4",
                "Nome" => "PHP",
                "Descrição" => "Back-End"
            ],
            [
                "Id" => "5",
                "Nome" => "SQL",
                "Descrição" => "Manipulação de Dados"
            ],
        ];

        // <pre><?= var_dump($linguagens) //?ç></pre>
        ?>
        <?php foreach ($linguagens as $linguagem): ?>
            <p> <b><?= $linguagem["Id"] ?></b>
                <?= $linguagem["Nome"] ?>
                <?= $linguagem["Descrição"] ?></p>
        <?php endforeach; ?>

        <hr>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody><?php foreach ($linguagens as $linguagem): ?>
                    <tr>
                        <td><?= $linguagem['Id'] ?></th>
                        <td><?= $linguagem['Nome'] ?></th>
                        <td><?= $linguagem['Descrição'] ?></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>





    </div>




</body>

</html>