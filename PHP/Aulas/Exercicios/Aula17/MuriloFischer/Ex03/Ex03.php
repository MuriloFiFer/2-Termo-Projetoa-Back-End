<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número digitado pelo usuário
    $numero = $_POST["numero"];

    // Inicializa o fatorial com 1
    $fatorial = 1;

    // Calcula o fatorial do número
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    // Exibe o resultado
    echo "<h1>O fatorial de $numero é $fatorial</h1>";
    echo '<a href="index.html">Voltar</a>';
}
?>
