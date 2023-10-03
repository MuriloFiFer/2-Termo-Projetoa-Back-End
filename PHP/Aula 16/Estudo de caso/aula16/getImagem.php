<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "test";

// setando o valor do GET do comando 'getNum={}' no exibir.php
$getNum = $_GET["getNum"];

// conectar no bd
$conn = mysqli_connect($host, $username, $password, $db);

// testando a conexão
if (!$conn) {
    die("Impossível conectar ao banco: " . mysqli_connect_error());
}

// liberando o valor do parâmetro para evitar injeção de SQL
$getNum = mysqli_real_escape_string($conn, $getNum);

// consultando o parâmetro liberado
$query = "SELECT * FROM image WHERE pes_id = '$getNum'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Impossível executar a query: " . mysqli_error($conn));
}

// verificando o registro
if (mysqli_num_rows($result) > 0) {
    // definindo o header para mostrar que a saída é uma imagem GIF
    header("Content-type: image/gif");

    // ler e exibir a imagem armazenada no banco de dados
    $row = mysqli_fetch_object($result);
    echo $row->pes_img;
} else {
    echo "Imagem não encontrada."; // mensagem de erro se tiver
}

// Fechando conexão
mysqli_close($conn);
?>