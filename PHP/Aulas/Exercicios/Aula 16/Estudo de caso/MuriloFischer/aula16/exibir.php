<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "test";

// conectar no banco de dados
$conn = mysqli_connect($host, $username, $password, $db);

// testando a conexão
if (!$conn) {
    die("Impossível conectar ao banco: " . mysqli_connect_error());
}

// setando a consulta
$query = "SELECT * FROM image";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Impossível executar a query: " . mysqli_error($conn)); // teste de consulta
}

// mostrando as imagens
while ($row = mysqli_fetch_object($result)) {
    echo "<hr>";
    echo "<img src='getImagem.php?getNum={$row->pes_id}' style='height: 200px; margin: 10px;'>"; // setando o tamanho e inserindo a var GET.
}

// fechando a conexão
mysqli_close($conn);
?>