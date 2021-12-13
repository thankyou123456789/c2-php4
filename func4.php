<?php
function day_name(){
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3 = "Wednesday";
    $day4 = "Thursday";
    return array($day1,$day2,$day3,$day4);
}
//$days = day_name();
//echo $days[0]."<br />".$days[1]."<br />".$days[2]."<br />".$days[3];

list($day_1,$day_2,$day_3,$day_4) = day_name();
echo $day_1."<br />".$day_2.."<br />".$day_3."<br />".$day_4;