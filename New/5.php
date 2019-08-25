<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arrays</title>
</head>
<body>
	<?php
		$mycars=array("Toyota","Nissan","Kia","Mazda");
		echo $mycars[3];
	?><br>
	<h3>before</h3>
	<pre>
	<?php print_r($mycars);?>
	</pre>

	<?php $mycars[4]="Suzuki";?>>
	<?php $mycars[]="Mitshubishi";?>
	<?php $mycars[3]="Honda";?>
	<h3>After</h3>
	<pre>
	<?php print_r($mycars);?>
	</pre>
</body>
</html>