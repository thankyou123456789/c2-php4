<?php
//function
//1.User-defined a Function
function add($a){
    $a; //initialization is input
    $b; //initialization is input
    $add = $a + $b; //expression Coce bolc
    echo "This is a Function add = " .$add."<br />"
}
add(20,5); //Calling add Function

fuction sub(){
    $a = 10;
    $b = 5;
    $sub = $a - $b;
    echo"This a Function Sub = ".$sub."<br />"
}

function division(){
    $a = 10;
    $b = 5;
    $division = $a - $b;
    echo"This a Function division = ".$division."<br />"
}

function multiply(){
    $a = 10;
    $b = 5;
    $multip = $a - $b;
    echo"This a Function multiply = ".$multip
}

add(); //Calling add Function
sub(); //Calling sub Function
division(); //Calling division Function
multiply(); //Calling multiply Function