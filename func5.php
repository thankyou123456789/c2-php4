<?php
function inc($i){
    echo $i = $i + 1;//$i++
}
$i = 10
inc($i);

function add(&$str){
    $str2 .=$str2. " Call by Rederence";
    echo $str2;
}
$str= "this is";
add($str);