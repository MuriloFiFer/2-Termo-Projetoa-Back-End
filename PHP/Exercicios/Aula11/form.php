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
	$data_nascimento =$_POST['data_nascimento'];
	$endereco =$_POST['endereco'];

	//Insere os dados na tabela do banco
	$sql = "INSERT INTO clientes (nome, emal, data_nascimento, endereco) VALUE ('$nome', '$email', '$data_nascimento', '$endereco')";
	mysqli_query($conexao, $sql);

	//Verifica se a inserção foi bem-sucedida
	if (mysqli_affected_rows($conexao) >0) {

		//Redireciona para uma página de erro
		header('Location: sucesso.php');

	}else {
		//Redireciona para uma página de sucesso
		header('Location: erro.php');
	}
} else {
	//Redireciona para uma página de erro
	geader('Location: erro.php');

}
?>