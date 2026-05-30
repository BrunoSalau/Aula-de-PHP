<?php 
    require_once __DIR__."/../models/Cliente.php";

    class ClienteControllers{

    public function cadastrar(): array{
        if($_SERVER["REQUEST_METHOD"] !== "POST"){
            return [
                "sucesso" => false,
                "mensagem" => "Requisicao"
            ];
        }
        $nome = trim($_POST["nome"]?? "");
        $email = trim($_POST["email"]?? "");
        $telefone = trim($_POST["telefone"]?? "");
        if(empty($nome) || empty($email) || empty($telefone)){
            return [
                "sucesso" => false,
                "mensagem" => "Preencha TUDO filha da puta"
            ];
        }
        if(!filter_var($email, FILTER_VALIDADE_EMAIL)){
            return [
                "sucesso" => false,
                "mensagem" => "Preencha DIREITO esse EMAIL filha da puta"
            ];
        }
        try{
            $cliente = new Cliente($nome, $email, $telefone);
            $cliente->salvar();
            return [
                "sucesso" => true,
                "mensagem" => "PAAARAAABEEENS"
            ];
        }catch(PDOException $erro){
            return [
                "sucesso" => false,
                "mensagem" => "seu erro de mierda: {$erro->getMessage()}"
            ];
        }
    }

    }
?>