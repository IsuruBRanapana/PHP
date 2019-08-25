<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>floating</title>
</head>
<body>
	<?php
		$var1=30.45;
		$var2=40.23;
		echo $var1;
		$var1+=4;
	?>
	<br>
	<?php echo $var1?>
	<h2>Functions</h2>
	Round : <?php echo round($var1,1);?><br>
	Round Up: <?php echo ceil($var1);?><br>
	Round Down: <?php echo floor($var1);?><br>
	Check number is an integer or floot : <?php
		$myInt=25;
		$myfloat=5.24;
	?><br>
	<?php echo "Is {$myfloat} an integer".is_int($myfloat);?><br>
	<?php echo "Is {$myInt} an integer".is_int($myInt);?><br>
	<?php echo "Is {$myfloat} an float".is_float($myfloat);?><br>
	<?php echo "Is {$myfloat} an number".is_numeric($myfloat);?><br>
	<?php echo "Is {$myInt} an number".is_numeric($myInt);?><br>
</body>
</html>