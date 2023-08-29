<?php
$sexo="feminino";
$tempo_de_servico=30;

  if ($sexo == "feminino") {
     if ($tempo_de_servico < 30){
        echo " não pode se aposentar";
     }else{
        echo "pode se aposentar";
     }
  }else{
      if ($tempo_de_servico < 35){
        echo " não pode se aposentar";
     }else{
        echo "pode se aposentar";
     }
  }

?>
