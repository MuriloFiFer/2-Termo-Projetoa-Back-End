<?php
if(isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $fatorial = 1;
    for ($i = $numero; $i > 0; $i--) {
        $fatorial *= $i;
    }

    echo "<h1>O fatorial de $numero é : $fatorial</h1>";
}
?>