<?php

	function fatorial($n) { //função que retorna o fatorial de um número
		//$n = $x;
		if ($n==0) {
		$retorno = 1;
		}
		else {
			$retorno = $n * fatorial($n - 1);
		}
		return $retorno;
	}

	//e a chamada
	echo "Fatorial de 1: " . fatorial(1) . "\n";
	echo "Fatorial de 2: " . fatorial(2) . "\n";
	echo "Fatorial de 3: " . fatorial(3) . "\n";
	echo "Fatorial de 4: " . fatorial(4) . "\n";
	echo "Fatorial de 5: " . fatorial(5) . "\n";
	echo "Fatorial de 6: " . fatorial(6) . "\n";
	echo "Fatorial de 100: " . fatorial(100) . "\n";
?>
