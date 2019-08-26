<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>News Page</h1>
	<pre>
		<?php 
			print_r($_GET);
			$newsItem=$_GET['news_items'];
			$categery=$_GET['categery'];
			$cat=$_GET['cat'];
		 ?>
	</pre>
	<h2>categories</h2>
	<?php  
		echo $newsItem;
	?><br>
	<?php  
		echo $categery;
	?><br>
	<?php  
		echo $cat;
	?><br>
</body>
</html>