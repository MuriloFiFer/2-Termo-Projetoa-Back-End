<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número digitado pelo usuário
    $numero = $_POST["numero"];

    // Verifica se o número é positivo, negativo ou igual a zero
    if ($numero > 0) {
        $mensagem = "Valor Positivo";
    } elseif ($numero < 0) {
        $mensagem = "Valor Negativo";
    } else {
        $mensagem = "Igual a Zero";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Verificação</title>
</head>
<body>
    <h1>Resultado da Verificação</h1>
    <?php if (isset($mensagem)): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
    <a href="index.html">Voltar</a>
</body>
</html>
    