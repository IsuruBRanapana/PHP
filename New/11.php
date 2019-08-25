<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$jobs=array("a","b","c","c");
		foreach ($jobs as $i) {
			echo $i."<br>";
		}
	 ?>
	 <br>
	 <?php
		$student=array("firstName"=>"Dileep","lastName"=>"Kariyawassam","age"=>45,"grade"=>13);
	?><br>
	<?php 
		foreach ($student as $label=>$myStudent) {
			echo $label.":".$myStudent."<br>";
		}
	 ?>
</body>
</html>