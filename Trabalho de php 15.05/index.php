<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th{
            background-color: #dcdcdc;
        }
    </style>
</head>
<body>

    <h1>Produtos</h1>

    <table>

        <tr>
            <th>Nome</th>
            <th>Validade</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        <?php

            // Abre o arquivo produtos.txt
            $arquivo = fopen("produtos.txt", "r");

            // Ignora a primeira linha (cabeçalho do arquivo)
            fgetcsv($arquivo, 1000, ",");

            // Lê linha por linha do arquivo
            while(($dados = fgetcsv($arquivo, 1000, ",")) !== FALSE){

                echo "<tr>";

                echo "<td>".$dados[0]."</td>";
                echo "<td>".$dados[1]."</td>";
                echo "<td>R$ ".$dados[2]."</td>";
                echo "<td>".$dados[3]."</td>";

                echo "</tr>";
            }

            // Fecha o arquivo
            fclose($arquivo);

        ?>

    </table>

</body>
</html>