<?php

//Nota
//Frequencia
//Se aprovado - nota >= 7 e Frequencia >= 8
//Recuperacao - nota >=5 ou <7 e Frequencia >= 8
//Reprovado - nota < 5 ou Frequencia < 8

$nota = readline("Digite a nota:");
$frequencia = readline ("Digite a frequencia: ");

if($nota>= 7 && $frequencia >=8){
	echo "aprovado";
}else if($nota >=5 && $nota <7 && $frequencia >=8){
	echo "Recuperacao!";
}else if ($nota < 5 || $frequencia <8){
	echo "reprovado!";}
	echo "\n";