<?php

if(isset($_POST['numero'])) {
    $numero = intval($_POST['numero']); 

  
    if ($numero % 2 == 0) {
        $resultado = "O número $numero é Par.";
    } else {
        $resultado = "O número $numero é Ímpar.";
    }

    echo "<h1>$resultado</h1>";
}
?>