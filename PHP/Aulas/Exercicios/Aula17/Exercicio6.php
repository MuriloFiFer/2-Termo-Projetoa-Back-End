<?php

if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d']) && isset($_POST['e'])) {

    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
    $d = intval($_POST['d']);
    $e = intval($_POST['e']);

 
    $valores = array($a, $b, $c, $d, $e);

   
    sort($valores);

 
    echo "A ordem crescente dos valores digitados é: " ;
    foreach($valores as $valor) {
    echo "$valor . ";
    }
}
?>