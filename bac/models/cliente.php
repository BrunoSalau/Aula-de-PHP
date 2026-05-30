<?php

require_once __DIR__. "/../config/database.php";

class Cliente{
    private Int $id;
    private String $nome;
    private String $email;
    private String $telefone;
    private PDO $conexao;

    public function __construct(String $nome, String $telefone,String $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $database = new Database();
        $this->conexao = $database->conectar();
    }

    public function salvar(){
        $sql = "insert into 
        clientes ( nome, email, telefone)
        values(:nome, :email, :telefone);";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);


        return $stmt->execute();
    }

}


?>