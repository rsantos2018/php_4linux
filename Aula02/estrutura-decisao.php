<?php

echo "<pre>";

$idade = 20;
$carterinha = false;

if (($idade >= 18) && $carterinha){

	echo "Maior idade com carterinha";
}
else if (($idade >=18) && $carterinha == false){
	echo "Maior idade, faça carterinha";
}else {
	echo "Menor de idade, carterinha não permitida.";
}
