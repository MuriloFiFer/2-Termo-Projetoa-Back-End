<?php

// Conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'clientes';

// Cria uma conexão com o banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

//Verifica se a conexão foi bem sucedida
if ($conexao) {
    //recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $endereco = $_POST['endereco'];

    //tratamento
    $dataNasc = implode("-", array_reverse(explode("/", $dataNasc)));

    //Insere os dados na tabela do banco
    $sql = "INSERT INTO clientes (nome, email, dataNasc, endereco) VALUES ('$nome', '$email', '$dataNasc', '$endereco')";
    mysqli_query($conexao, $sql);

    //Verifica se a inserção foi bem-sucedida
    if (mysqli_affected_rows($conexao) > 0) {

        //Redireciona para uma página de erro
        header('Location: sucesso.php');

    } else {
        //Redireciona para uma página de sucesso
        header('Location: erro.php');
    }
} else {
    //Redireciona para uma página de erro
    header('Location: erro.php');
}
?>
