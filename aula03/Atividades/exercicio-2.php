<?php

echo "<pre>";

$num = 2;
$num +=5;
echo "$num \n";
echo "<hr>";

$num -=3;
echo "$num \n";
echo "<hr>";

$num *=10;
echo "$num \n";
echo "<hr>";

$num /=2;
echo "$num \n";
echo "<hr>";

$cont=0;

while ($cont<=10){
	echo  " $cont - valor " ;
	echo "<br>";
	$cont++;
}

echo " \n";
echo "<hr>";


$cont=100;

do{
	echo $cont;
	echo "<br>";
	$cont--;
}while ($cont>=89);

	echo "Chegou ao valor 89!!";