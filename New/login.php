 <?php 
 	if (isset($_POST['login'])) { 
 			$username=$_POST['username'];
 			$password=$_POST['password'];

 			if ($username=='Charuni' && $password == 'isuru') {
 				echo "Logged in";
 			}else{
 				echo "Invalid login";
 			}
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<form action="login.php" method="post">
 		Username : <input type="text" name="username"><br>
 		Password : <input type="password" name="password"><br>
 		<input type="submit" name="login" value="Log In">
 	</form>
 </body>
 </html>