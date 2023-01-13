<?php

$z = 4;
$z = $z + 3;
echo $z,"<br>";

$z += 1;
echo $z,"<br>";

$z ++;
echo $z,"<br>";
$z --;
echo $z,"<br>";

$str = "A";
$str ++;
echo $str,"<br>";

$str = "AA";
$str ++;
echo $str,"<br>";

$x = 33;
$y = "33";
echo ($x == $y), "<br>";
echo ($x === $y), "<br>";
echo ($x !== $y), "<br>";

$c = true;
$d = false;

echo !$d, "<br>";
echo $c xor $d, "<br>";
echo $c && $d, "<br>";
echo (!$c || $d) && ($c xor $d),"<br>";
echo $c || $d, "<br>";





?>