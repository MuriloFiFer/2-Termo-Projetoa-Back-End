<?php

session_start();



echo "nome: " . $_SESSION['user'] . "<br>";
echo "senha: " . $_SESSION['pass'] . "<br>";
// colocar o id
// echo session_id() . "<br>";


?>