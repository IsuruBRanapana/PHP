
<?php 
 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	if ($username=='Charuni' && $password == 'isuru') {
 		echo "Logged in";
 	}else{
 		echo "Invalid login";
 	}
?>

 