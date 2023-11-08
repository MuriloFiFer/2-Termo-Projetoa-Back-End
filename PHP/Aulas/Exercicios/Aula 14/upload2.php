<?php

if(isset($_POST['enviar-formulario'])):
$formatos = array("png", "jpeg", "gif", "pdf");
$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

if(in_array($extensao, $formatos)):
	//echo "Existe";
	$pasta = "arquivos/";
	$temporario = $_FILES['arquivo']['tmp_name'];
	$novoNome = uniqid() . ".$extensao";

	if(move_uploaded+file($temporario, $pasta.$novoNome)):
		$mensagem = "Upload feito com sucesso.";
	else:
		$mensagem = "Erro, não foi possivel fazer o upload.";
	endif;
else:
	//echo "Nao existe";
	$mensagem = "Formato invalido!!";
endif;

echo $mensagem;

endif;

echo "<br> <a hred='index.php'> << voltar </a>"
?>
