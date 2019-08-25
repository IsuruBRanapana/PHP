<?php
    //variables
    $firstName="Saman";
    echo $firstName;
    echo "<br>";

    //strings
    $lastName="Perera";
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $firstName." ".$lastName;
    echo "<br>";
    echo "Full name : $firstName $lastName";
    echo "<br>";

    //string functions
    $first ="the five boxing wizard.";
    $second ="Jump quickly";

    $sentence = $first;
    $sentence .=$second;
    echo $sentence;

?>
<br>
All Simple:
<?php echo strtolower($sentence);?>
<br>
All Capital:
<?php echo strtoupper($sentence);?><br>
first letter Capital:
<?php echo ucfirst($sentence);?><br>
first letter Capital all words:
<?php echo ucwords($sentence);?><br>
number of charactors:
<?php echo strlen($sentence);?><br>
find word:
<?php echo strstr($sentence,"Jump");?><br>
change inside:
<?php echo str_replace("five","seven",$sentence);?><br>
