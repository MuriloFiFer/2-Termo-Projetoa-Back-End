<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aluno";

$conn = new mysqli($servername, $username, $password, $dbname);

id ($conn->connect_error) {
	header("Location: erro.html");
	exit();
} else {
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$data_nascimento = $_POST['data_nascimento'];
	//data em formato brasileito para inseror no mysql user:
	$data = implode ("-", array_reverse(explode("/",$data_nascimento)));
	$sql = "INSERT INTO aluno (nome, endereco, email, sexo, dataNasc)
	VALUES ('$nome', '$endereco', '$email', '$sexo', '$data')";

	if ($conn->query($sql) === TRUE) {
		header("Location: sucesso.html");
			exit();
		} else {
			header("Location: erro.html");
			exit();
		}
	}

	$conn->close();
?>
