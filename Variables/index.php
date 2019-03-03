<?php
    //add input box to php
    echo '<input type="text" id="txt1" placeholder="Name">';

    //add input box and give values using variables
    $text1 = "New";
?>

<input type="text" id="txt2" placeholder="<?php echo $text1 ?>">