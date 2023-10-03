<?php

$imagem = $_FILES["imagem"]; //variavel da imagem 

// parametros da conexão no bd
$host = "localhost";
$username = "root";
$password = "";
$db = "test";

if ($imagem != null && $imagem['error'] == 0) { // verificação - verifica se um arquivo foi realmente enviado e se não houve erros no upload
    $nomeFinal = time() . '.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) { // move o arquivo temporário para o destino final
        $conexao = mysqli_connect($host, $username, $password, $db); // setando os construtores da conexão

        if (!$conexao) {
            die("Impossível Conectar: " . mysqli_connect_error()); // verifica conexão
        } 

        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(file_get_contents($nomeFinal)); // leitura do arquivo

        $query = "INSERT INTO image (pes_img) VALUES ('$mysqlImg')"; // consulta banco de dados
        if (mysqli_query($conexao, $query)) {
            unlink($nomeFinal); // remove o arquivo temporário depois do upload
            header("location: exibir.php");
        } else {
            echo "O sistema não foi capaz de executar a query: " . mysqli_error($conexao);
        }

        mysqli_close($conexao); // fecha a conexão com o banco de dados
    } else {
        echo "Falha ao mover o arquivo para o destino final.";
    }
} else {
    echo "Imagem não encntrada.";
}

?>
