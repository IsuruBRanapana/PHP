<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<h1>Home page</h1>
	<?php 
		$news_items=32;
		$categery="sport";
		//to use & sign
		$cat=urlencode("dog & bird");
		$url="news.php?news_items={$news_items}&categery={$categery}&cat={$cat}"
	?>
	<a href="<?php echo($url) ?>">Read new Items</a>
</body>
</html>