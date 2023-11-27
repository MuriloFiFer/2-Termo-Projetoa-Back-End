<?php
if(isset($_POST['numero'])) {

    $numero = intval($_POST['numero']);


    if($numero >= 1 && $numero <= 12) {
  
        $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto","Setembro", "Outubro", "Novembro", "Dezembro"
        );

   
        $nome_mes = $meses[$numero - 1];


        echo "<h1>O número $numero corresponde ao mês de $nome_mes.</h1>";
    } else {

        echo "<h1>Não existe mês com este número.</h1>";
    }
}
?>