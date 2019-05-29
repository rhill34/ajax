<?php
echo "<h3>This is showphrase</h3>";

$adjs = array("funny", "smart", "talented", "nerdy", "gifted");
$names = array("Max", "Sang", "Trang", "Bo", "Vera");
$num = $_POST['num'];

for($i=0; $i<$num; $i++)
{
    $name = $names[rand(0, count($names) - 1)];
    $adj = $adjs[rand(0, count($adjs) - 1)];
    $result = "<h3>$name is very $adj!</h3>";
    echo $result;
}

//print_r($_POST);
//echo "num: ".$_POST['num'];