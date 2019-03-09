<?php
	$num1=4;
	$num2=50;
	
	function Add($number1, $number2){
		echo $number1+$number2;
	}
	
	Add($num1,$num2);
	echo "<br>";
	
	function RealDate($day, $date, $year){
		echo $day.". ".$date.". ".$year;
	}
	RealDate("Monday", 12, 2019);
?>