<?php
function CALC ($numero_mes ){

       

        switch ($numero_mes) {
            case 1:
                echo "<h2>Janeiro</h2>";
                break;
            case 2:
                echo "<h2>Fevereiro</h2>";
                break;
            case 3:
                echo "<h2>Março</h2>";
                break;
            case 4:
                echo "<h2>Abril</h2>";
                break;
            case 5:
                echo "<h2>Maio</h2>";
                break;
            case 6:
                echo "<h2>Junho</h2>";
                break;
            case 7:
                echo "<h2>Julho</h2>";
                break;
            case 8:
                echo "<h2>Agosto</h2>";
                break;
            case 9:
                echo "<h2>Setembro</h2>";
                break;
            case 10:
                echo "<h2>Outubro</h2>";
                break;
            case 11:
                echo "<h2>Novembro</h2>";
                break;
            case 12:
                echo "<h2>Dezembro</h2>";
                break;
            default:
                echo "<h2>Não existe mês com este número</h2>";
        }
    }
     $numero_mes = $_POST["numero_mes"];
        echo CALC($numero_mes );
    
    ?>