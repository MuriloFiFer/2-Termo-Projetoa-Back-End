<?php

if(isset($_POST['operacao']) && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $operacao = $_POST['operacao'];
    $numero1 = floatval($_POST['numero1']); 
    $numero2 = floatval($_POST['numero2']); 

    
    switch($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            break;
        case 'divisao':
            
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Erro: Divisão por zero.";
            }
            break;
        default:
            $resultado = "Operação inválida.";
            break;
    }

    
    echo "<h1>O resultado é: $resultado</h1>";
}
?>





