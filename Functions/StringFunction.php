<?php
	$string="This is a string word.";
	//count of word
	$string_word_count=str_word_count($string,0);
	print_r($string_word_count."<br>");
	echo "<br>";
	
	//array
	$string_word_count=str_word_count($string,1);
	print_r($string_word_count);
	echo "<br>";
	
	//colomn starting point
	$string_word_count=str_word_count($string,2);
	print_r($string_word_count);
	echo "<br>";
	
	$string_word_count=str_word_count($string,0,'.');
	print_r($string_word_count."<br>");
?>