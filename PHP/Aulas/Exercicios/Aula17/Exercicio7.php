<?php

if(isset($_POST['a']) && isset($_POST['b'])) {
   
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);


    if($a > $b) {
        echo "A é maior que B";
    } elseif($a < $b) {
        echo "A é menor que B";
    } else {
        echo "A é igual a B";
    }
}
?>
