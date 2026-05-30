<?php

class Database {
    private String $host = "localhost";
    private String $banco = "sistema_clientes";
    private String $usuario = "root";
    private Int $port = 3306;
    private String $senha = "1234";
    private ?PDO $conexao = null;

    public function conectar(): PDO {
        if ($this->conexao === null) {
            try {
                $this->conexao = new PDO(
                    "mysql:host={$this->host};port={$this->port};banco={$this->banco};charset=utf8mb4",
                    $this->usuario,
                    $this->senha
                );

                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $erro) {
                die("Erro ao conectar ao banco de dados: " . $erro->getMessage());
            }
        }

        return $this->conexao;
    }
}