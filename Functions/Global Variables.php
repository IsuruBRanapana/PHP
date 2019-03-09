<?php
	$ip=$_SERVER['REMOTE_ADDR'];
	function DisplayIP(){
		global $ip;// without using this we can't access to this variables
		$x="Your IP Address is ".$ip;
		echo $x;
	}
	DisplayIP();
?>