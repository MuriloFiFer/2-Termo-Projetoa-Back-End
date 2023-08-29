<?php
  
  $n = 17;
  $divisores = 0;
  
  for($count=2; $count<=($n/2); $count++)
    if($n % $count == 0){
      echo "Multiplo de $count \n";
      $divisores++;
    }
  
  if($divisores)
    echo "Não é primo, tem $divisores divisores além de 1 e ele mesmo.\n";
  else
    echo "É primo!\n";
  
?>
