<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os números digitados pelo usuário
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Obtém a operação escolhida pelo usuário
    $operacao = $_POST["operacao"];

    // Realiza a operação de acordo com a escolha do usuário
    switch ($operacao) {
        case "soma":
            $resultado = $numero1 + $numero2;
            break;
        case "subtracao":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            break;
        case "divisao":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Divisão por zero não é permitida.";
            }
            break;
        default:
            $resultado = "Operação inválida.";
            break;
    }

    // Exibe o resultado
    echo "<h1>Resultado da Operação:</h1>";
    echo "<p>$numero1 $operacao $numero2 = $resultado</p>";
    echo '<a href="index.html">Voltar</a>';
}
?>
