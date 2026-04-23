<?php
$nome_do_form = "Dados cadastrais";
include("component.php");
/*if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Valores Recebidos:";
    foreach ($_POST as $key => $value) {
        if($key === "nome"){
            $nome = htmlspecialchars($value);
            if(empty($nome)){
                echo "<p>Seu nome esta vazio, por favor, preencha</p>";
            }   
            else{
                echo "<p> $key:: $value</p>";
            }
        }
        elseif($key === "email"){
            $email = filter_input(INPUT_POST,$key,FILTER_VALIDATE_EMAIL);
            $email = htmlspecialchars($email);
            if(empty($email)){
                echo "<p>email preenchida incorretamente!</p>";
            }
            else{
                echo "<p>$key: $value</p>";
        
            }
        }



        elseif($key === "idade"){
            $idade = filter_input(INPUT_POST,$key,FILTER_VALIDATE_INT);
            $idade = htmlspecialchars($idade);
            if(empty($idade) || $idade <= 0 || $idade > 100){
                echo "<p>Idade preenchida incorretamente!</p>";
            }
            else{
                echo "<p>$key: $value</p>";
        
            }
        }
        if($key === "curso"){
            if(empty($value)){
                echo "<p>curso válido</p>";
            }
            elseif($value === "BES" || $value === "ADS" || $value === "BCC"){
                echo "<p>$key: $value</p>";
            }
            else{
                echo "<p>curso válido</p>";
            }
        }
    }
}*/
?>