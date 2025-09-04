<?php
$arr = array(10,20,30,20,40,10,50,30);
echo "orginal Array:<br>";
print_r($arr);
$uniqueArr = array_unique($arr);
echo "Array after removing duplicates:<br>";
print_r($uniqueArr);
?>