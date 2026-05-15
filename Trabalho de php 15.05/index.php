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

           
            $arquivo = fopen("produtos.txt", "r");

            
            fgetcsv($arquivo, 1000, ",");

            
            while(($dados = fgetcsv($arquivo, 1000, ",")) !== FALSE){

                echo "<tr>";

                echo "<td>".$dados[0]."</td>";
                echo "<td>".$dados[1]."</td>";
                echo "<td>R$ ".$dados[2]."</td>";
                echo "<td>".$dados[3]."</td>";

                echo "</tr>";
            }

            
            fclose($arquivo);

        ?>

    </table>

</body>
</html>
