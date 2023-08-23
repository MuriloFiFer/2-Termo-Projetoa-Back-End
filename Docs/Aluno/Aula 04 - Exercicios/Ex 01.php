<?php

    $nota1 = 5;
    $nota2 = 4;
    $nota3 = 3;
    $nota4 = 4;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 7){
       $situacao = " Aprovado - media: $media. \n";
    }elseif ($media >= 5){
       $situacao=" Exame - media: $media. \n";
    }else{
       $situacao="Reprovado - media: $media. \n";
    }

    echo $situacao;
    
?>
