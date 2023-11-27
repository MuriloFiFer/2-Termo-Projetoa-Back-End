<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número digitado pelo usuário
    $numero = $_POST["numero"];

    // Exibe a tabuada do número de 0 a 10
    echo "<h1>Tabuada do $numero</h1>";
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero X $i = $resultado<br>";
    }
    echo '<a href="index.html">Voltar</a>';
}
?>
