<?php

echo "<pre>";

$num1 = 2;
$num2 = 5;

var_dump($num1 == $num2);
echo "<hr>";

var_dump($num1 === $num2);
echo "<hr>";

var_dump($num1 != $num2);
echo "<hr>";

var_dump($num1 > $num2);
echo "<hr>";

var_dump($num1 < $num2);
echo "<hr>";

var_dump($num1 >= $num2);
echo "<hr>";

var_dump($num1 <= $num2);
echo "<hr>";
echo "<br>";

$a = true;
$b = false;

var_dump($a and $b);
var_dump($a && $b);
var_dump($a or $b);
var_dump($a || $b);
