<?php
// Dados de conexão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "senha";
$banco = "clientes";

//Tentativa de cenexão
$conn =  mysqli_connect($host, $usuario, $senha, $banco);

//Verifica se ocorreu um erro na conexão
if (!$conn) {
	//Redireciona para a página de erro
	die("Falha na conexão!." . mysqli_connect_error());
}
echo "Conectado com sucesso!";

mysqli_clise($conn);
?>