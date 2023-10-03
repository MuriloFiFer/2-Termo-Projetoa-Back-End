<!DOCTYPE html>
<head>
		<title>AULA 16</title>
		<meta charset="utf-8"/>
		
</head>
<body style="background-color:#B0C4DE;" > <!--colocando background no body -->
	<!-- separando em div para centralizar uma caixa de texto colocando css na div -->
	<div style="background-color:#DCDCDC; margin-left:35%; margin-top:5%; width: 25%;height: 80px;border-radius: 10px; box-shadow: 5px 5px 5px  #000;">
	<div style="width: 90%;height: 80px;margin-left: 5%;">
	<form action="gravar.php" method="POST" enctype="multipart/form-data">
		<label for="imagem">Selecione a imagem:</label>
		<input type="file" name="imagem"/>
		<br/>
		<input type="submit" value="Enviar"/>
		</div>
		</div>
	</form>
</body>
</html>