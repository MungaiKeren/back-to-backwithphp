<?php 

    $number = array(10,20,30);

    echo $number[2] . "<br>";

    $names = ["first_name" => "Keren", "last_name" => "Wambui"];

    // the fat arrow does replace the key
    // print_r($names);

    echo ($names['first_name'] . " " . $names['last_name']);

?>
