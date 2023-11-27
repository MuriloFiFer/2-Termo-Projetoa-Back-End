<?php

if(isset($_POST['nome']) && isset($_POST['idade'])) {
   
    $nome = $_POST['nome'];
    $idade = intval($_POST['idade']); 

    if ($idade >= 18) {
        $mensagem = "$nome tem $idade anos, é maior de idade.";
    } else {
        $mensagem = "$nome tem $idade anos, é maior de idade.";
    }

    
    echo "<h1>$mensagem</h1>";
}
?>