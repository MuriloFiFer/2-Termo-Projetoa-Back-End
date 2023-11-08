<?php

session_start();

// if(isset($_SESSION['user'])) {

// 	var_dump($_SESSION['user']);

//	echo "<br>";

$_SESSION['user'] = "admin";
$_SESSION['pass'] = "1234";


echo $_SESSION['user'] . "<br>";
echo $_SESSION['pass'] . "<br>";
//colocar o id
echo session_id() . "<br>";

// }


?>
