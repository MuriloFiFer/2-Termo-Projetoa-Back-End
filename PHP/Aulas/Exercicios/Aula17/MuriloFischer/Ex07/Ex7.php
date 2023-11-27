
 <?php
function CALC ($num1,$num2){
if ($num2>$num1) {
	echo "NUMERO A É MENOR QUE B";
}else if ($num2<$num1) {
	echo "NUMERO A É MAIOR QUE B";
}else{
	echo "NUMERO A É IGUAL á B";
}
 }
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];



echo CALC($num1,$num2);

?>
