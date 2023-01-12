<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* $userName;
$user_name;

$name = "Jack <br>";
$century = 20;
echo $name;
echo "Hello World";
echo "Hello $name <br>";


echo $century, "<br>";
echo "hello $name";
echo "sum 2 + 4 =". 2 + 4 ;
echo "$name was born in the $century th century <br>";

$century = 30;
echo "$name was born in the $century th century <br>";

define ("DB_LOGIN", "root");
echo DB_LOGIN. "<br>"; */
?>

<div>
    <span>Date now: <?php echo "11.01.2023" ?> </span>
</div>

<div>
    <span>Date now: <?= date('d.m.Y H:i:s') ?> </span>
</div>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit et omnis modi eligendi excepturi quos nostrum dolorem optio saepe quod? Tempora quae quisquam nisi dicta. Reiciendis dignissimos consequuntur molestias. Qui.</p>

<?php
/* echo __DIR__, "<br>";
echo __FILE__,"<br>";
echo __LINE__,"<br>";
echo PHP_VERSION,"<br>";
error_reporting(E_ALL); */


$name_user = "Anton";
$age = 39;
define("TOWN", "East Grinsted");


$text = "my name is {$name_user}, I am {$age} years old, i am from ". TOWN ."<br>";
echo $text, "<br>";

define("COLOR", "#ff0000");

echo gettype($name_user). "<br>";
echo var_dump($name_user). "<br>";

$a = 5;
$a = $a + 1;
echo $a, "<br>";
echo gettype($a), "<br>";

$a = (string) $a;
$a = (bool) $a;
echo gettype($a), "<br>";

$new_Arr = [34, 344,22, 4];
echo $new_Arr[2]."<br>";
$new_arr_2 = ["first" => 45, "second" => 67, "RTE" => "kjhb"];
echo $new_arr_2["first"]."<br>";
print_r($new_arr_2);

$q = 5;
$q = (string) $q;
?>
<p style = color:<?= COLOR?>>This is the color</p>
</body>
</html>


