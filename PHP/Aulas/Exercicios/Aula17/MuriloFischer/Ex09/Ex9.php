
 <?php
function CALC ($num1){
if ($num1 >= 18) {
	echo "Fulano é maior de 18 anos, e tem: $num1";
}else{
	echo "Fulano é menor de 18 anos, e tem: $num1";}
 }
$num1 = $_POST['num1'];



echo CALC($num1);

?>
