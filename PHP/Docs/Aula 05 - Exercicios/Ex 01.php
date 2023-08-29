<?php

    function media($x, $y, $z, $w){

        $nota1 = $x;
        $nota2 = $y;
        $nota3 = $z;
        $nota4 = $w;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        //echo $media;
        return $media;
    }

    $media = media(5,6,7,8);

    if ($media >= 7){
        $situacao = " Aprovado - media: $media. \n";
    }elseif ($media >= 5){
        $situacao = " Exame - media: $media. \n";
    }else{
        $situacao = "Reprovado - media: $media. \n";
    }
    
    echo $situacao;
    
?>
