<?php 

    // step 1: Mave two variable named number 1 and number 2 and give them values 10 and 20.

    $number1 = 10;
    $number2 = 20;

    // step 2: add the two values and display them with echo
    $sum = $number1 + $number2;

    echo ("The sum is" . " " . $sum);
    echo ("<br>");
    echo ("<br>");echo ("<br>");echo ("<br>");

    //  step 3: Make two arrays with the same values, one regular the other associate.

    $regularArray = [10, "<h1>Keren</h1>", "10009", 2020];

    echo "The regular array is " . $regularArray[2];
    echo ("<br>");echo ("<br>");echo ("<br>");

    $associateArray = ["Year" => 2020, "month" => 10];

    echo "The associate array is " . $associateArray["Year"];

?>