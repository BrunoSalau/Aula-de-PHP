<?php

require_once __DIR__ . "/controllers/clienteControllers.php";

$acao = $_GET["acao"] ?? "formulario";

if ($acao === "cadastrar") {
    $controller = new ClienteController();
    $resultado = $controller->cadastrar();

    require_once __DIR__ . "/views/mensagem.php";
} else {
    require_once __DIR__ . "/views/boa.php";
}