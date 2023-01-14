<?php



$rain = 1;
/* if($rain){
    echo "it's raining";
} */

echo $rain ? "it is rain <br>" : "sunny";

$user = "dark";
    if (isset($user)):
        echo "Hi<br>";
        unset($user);
    endif;

$week = [1=>"Mn", "Tu", "Wd", "Th", "Fr", "St", "Sn"];
foreach($week as $key => $day){
    echo "$key: $day<br>";
}
?>