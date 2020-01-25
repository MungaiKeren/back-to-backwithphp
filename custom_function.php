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