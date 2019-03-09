<?php
	function Add($num1, $num2){
		return $num1+$num2;
	}
	
	function Multy($num1, $num2){
		return $num1*$num2;
	}
	
	$total=Multy(Add(10,2), Add(5,5));
	echo $total;
?>