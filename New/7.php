<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Associative arraya</title>
</head>
<body>
	<?php
		$student=array("firstName"=>"Dileep","lastName"=>"Kariyawassam","age"=>45);
	?><br>
	<pre>
	<?php print_r($student);?>
	</pre>
	<?php
		echo $student["firstName"];
	?><br>
	<?php
		echo $student["lastName"];
	?><br>
	<?php
		$student["age"]=25;
	?><br>
	<?php
		echo $student["age"];
	?><br>
</body>
</html>