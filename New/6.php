<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arrays</title>
</head>
<body>
	<?php
		$mycars=array(10,20,30,"Toyota","Nissan","Kia",array("black","White","Blue"),"Mazda");
		echo $mycars[3];
	?><br>
	<h3>before</h3>
	<pre>
	<?php print_r($mycars);?>
	</pre>
	<?php $mycars[6][1]="red";?>
	<h3>After</h3>
	<pre>
	<?php print_r($mycars);?>
	</pre>
	
</body>
</html>