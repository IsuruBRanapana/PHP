<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Boolean</title>
</head>
<body>
	<?php
		$var1=true;
		$var2=false;
		$var3="book";
	?>
	<?php echo $var1;?><br>
	<?php echo $var2;?><br>
	<?php echo "Is \$var1 boolean? ".is_bool($var1);?><br>
	<?php echo "Is \$var2 boolean? ".is_bool($var2);?><br>
	<?php echo "Is \$var3 boolean? ".is_bool($var3);?><br>
	

</body>
</html>