<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número digitado pelo usuário
    $numero = $_POST["numero"];

    // Verifica se o número é par ou ímpar
    if ($numero % 2 == 0) {
        $mensagem = "O número $numero é par.";
    } else {
        $mensagem = "O número $numero é ímpar.";
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
