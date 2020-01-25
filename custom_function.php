<?php

function init(){
    calculate();
    echo("<br>");
    say_something();
}


function say_something(){
echo "Hello student
    do you like the class? okay";
}

function calculate(){
    echo 409+12;
}

init();

// parameters
function greetings($message){
    echo "<br>".$message;
}
greetings("hello I used a parameter");


function add($num1, $num2){
    echo "<br>".$num1+$num2;
}
add(12, 19)
?>