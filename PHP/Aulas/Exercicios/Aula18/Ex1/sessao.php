<?php

session_start(); // Precisam ser chamadas antes que qualquer informação seja impressa na tela.

// Pois são enviados na cabeçalho do HTTP

$_SESSION['nome'] = "Maria"; //Manda setar a variável

echo "<a href='sessao01.php'>Teste Sessão 01</a>";

?>