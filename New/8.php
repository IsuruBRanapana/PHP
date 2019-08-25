<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$myNumbers = array(12,13,15,62,2,89,654,1,72,64,5);
	?>
	Maximum Value:<?php echo max($myNumbers);?><br>
	Minimum Value:<?php echo min($myNumbers);?><br>
	number of items:<?php echo count($myNumbers);?><br>
	order(sort):<pre><?php sort($myNumbers); print_r($myNumbers);?></pre><br>
	order(reverse sort):<pre><?php rsort($myNumbers); print_r($myNumbers);?></pre><br>
	Implode:<?php 
		$string = implode("|", $myNumbers);
		echo $string;
	?><br>
	Explode:<pre><?php 
		$newArray = explode("|", $string);
		print_r($newArray);
	?></pre><br>
	Search Item :<?php echo in_array(12,$myNumbers);?><br>
	Search Item :<?php echo in_array(8,$myNumbers);?><br>
	
</body>
</html>