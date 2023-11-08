<?php

include "funcao.php";
$faren = $_GET['faren'];
$celsi = $_GET['celsi'];



echo"Conversão de Farenheit para Celsius=".CalcFah($faren);

echo"<p>Conversão de Celsius para Farenheit=".CalcCel($celsi);



?>