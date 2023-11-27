<?php
if(isset($_POST['numero'])) {
    $numero = floatval($_POST['numero']); 
    if($numero > 0) {
        echo "Valor é Positivo";
    } elseif($numero < 0) {
        echo "Valor é Negativo";
    } else {
        echo "O Valor é Igual a Zero" ;
    }
}
?>