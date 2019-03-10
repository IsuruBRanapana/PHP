<?php
	$string="This is a string word .";
	//shuffle the string
	$string_shuffled=str_shuffle($string);
	echo ($string_shuffled);
	echo "<br>";
	
	//shuffle the string
	$string_shuffled=str_shuffle($string);
	echo ($string_shuffled);
	$half=substr($string_shuffled,0,strlen($string)/20);
	echo $half;
	echo "<br>";
	
	$string="This is a string word .";
	//revers the string
	$string_revers=strrev($string);
	echo ($string_revers);
	echo "<br>";
	
	//similarity
	$str1="This is the first string";
	$str2="This is the second string";
	similar_text($str1,$str2,$result);
	echo $result;
	echo "<br>";
	
?>