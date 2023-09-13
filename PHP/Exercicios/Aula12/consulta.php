<?php

//$servername = 'localhost';
//$username = 'riit';
//$password = '';
//$dbname = 'aluno';

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'aluno');

$sql = mysql_query($conexao,"select * from aluno") or die("Erro"); 
while($dados=mysqli_fetch_assoc($sql))
{
	echo $dados['id'] . ' ';
	echo $dados['nome'] . '<br>';
}
?>