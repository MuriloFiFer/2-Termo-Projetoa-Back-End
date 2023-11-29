<?php
	
	require_once 'Veiculo.php';
	require_once 'Carro.php';
	require_once 'Moto.php';

	$veiculo = new Moto();
	//$veiculo->marca = "Honda";
	$veiculo->setMarca("VW");
	//echo $veiculo->marca . "<br>";
	echo $veiculo->getMarca() . "<br>";

	$veiculo->setModelo("Golzinho");
	echo $veiculo->getmodelo() . "<br>";

	

	print_r($veiculo);





?>