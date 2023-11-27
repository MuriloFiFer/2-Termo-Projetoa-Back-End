
 <?php
function CALC ($num1,$num2){
if ($num2>$num1) {
	echo "$num1 <br>"."$num2";
}else{
		echo "$num2 $num1";
}
 }
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];



echo CALC($num1,$num2);

?>
