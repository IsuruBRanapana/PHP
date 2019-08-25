<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Integer</title>
</head>
<body>
	<?php
		$var1=30;
		$var2=40;


	?>
	Basic calculation(((10+20+$var1)*$var2)/20-50):<?php echo (((10+20+$var1)*$var2)/20-50);?>
	<h2>Useful function</h2>
	square root:<?php echo sqrt(100);?><br>
	Exponontial:<?php echo pow(2,4);?><br>
	Abs:<?php echo abs(-100);?><br>
	Modular:<?php echo fmod(10,3);?><br>
	random number : <?php echo rand();?><br>
	random number between numbers : <?php echo rand(10,120);?><br>
	increment : <?php $var1+=20; echo $var1?>
	decrement : <?php $var1-=20; echo $var1?>
</body>
</html>