<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">Nome do Cliente</label>
        <input type="text" name="nome">
        <br>
        <br>
        <select name="lanches" id="lanche">
            <option value="S">X-Salada</option>
            <option value="H">X-Hamburguer</option>
            <option value="E">X-Egg</option>
            <option value="R">X-Ratao</option>
        </select>
        <br>
        <br>
        <input type="radio" id="pequeno" name="tamanho" value="tamanho_pequeno">
        <label for="pequeno">Tamanho pequeno</label><br>

        <input type="radio" id="medio" name="tamanho" value="tamanho_medio">
        <label for="medio">Tamanho medio</label><br>

        <input type="radio" id="grande" name="tamanho" value="tamanho_grande">
        <label for="grande">Tamanho grande</label><br><br>
        <br>


        <input type="checkbox" name="adicionais" value="bacon"> Bacon<br>
        <input type="checkbox" name="adicionais" value="queijo"> Queijo<br>
        <input type="checkbox" name="adicionais" value="ovo"> Ovo<br>
        <input type="checkbox" name="adicionais[]" value="salada"> Salada<br><br>

        <br><br>
        <label for="qunat">Quantidade:</label>
        <input type="number" name="quantidade">

    <button type="submit">Eniviar pedido</button>
</form>


    <?php
        if(isset($_POST["nome"],$_POST["lanches"],$_POST["tamanho"],$_POST["quantidade"])){
        
            $pedido = array(
                "nome" => $_POST["nome"],
                "lanches" => $_POST["lanches"],
                "tamanho" => $_POST["tamanho"],
                "checkbox" => $_POST["adicionais"],
                "quantidade" => $_POST["quantidade"]
            );

            echo "Cliente: " . $pedido["nome"] . "<br>";
            echo "Lanche: " . $pedido["lanches"] . "<br>";
            echo "Tamanho: " . $pedido["tamanho"] . "<br>";
            echo "adicionais: " . $pedido["checkbox"] . "<br>";
            echo "Quantidade: " . $pedido["quantidade"];



        }
    ?>
</body>
</html>