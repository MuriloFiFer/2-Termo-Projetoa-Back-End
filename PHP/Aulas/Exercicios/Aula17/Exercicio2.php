<?php
if(isset($_POST['numero'])) {
    $numero = intval($_POST['numero']); 
    echo "<h2>Tabuada do $numero</h2>";

    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<h1>$numero X $i = $resultado<br></h1>";
    }
}
?>