<?php
// função para retornar se número é par ou impar;
// função que receba dois números e retorne o maior;
// função que receba uma idade e retorne se é maior de idade;
// função que receba um array com informações de uma pessoa e diga se ela pode dirigir.
// pessoa = ['nome', 'idade', 'tem habilitação']

function par($valor){

	if ($valor % 2 == 0){
		
		echo "O número é par!";
	}else{
		echo "O número é impar!";
	}

}
echo par(3);

echo "<hr>";

function maior($valor1="valor1", $valor2="valor2"){
	if ($valor1 > $valor2){

		return $valor1;

	}elseif($valor1 < $valor2){

		return $valor2;

	}else{

		return "Os números são iguais";
	}
}

echo maior(5,5);

echo "<hr>";

function maiorIdade($num){
	
	if($num >= 18){

		return "Maior idade";

	}else{

		return "Menor idade!";
	}
}

echo maiorIdade(15);

echo "<hr>";



function dirigir( array $pessoa){
		
	if($pessoa['idade'] >= 18 && $pessoa ['temHabilitação']){
		
		return "Pode dirigir";

	}else{

		return "Não pode dirigir.";
	}
}


function podeDirigir($idade, $temHabilitacao){
	
	if ($idade >= 18 && $temHabilitacao){
		
		return "Pode dirigir";

	}else{

		return "Não pode dirigir.";
	}
}

$reginaldo = ['nome' =>'reginaldo', 'idade' => 17, 'temHabilitação'=> 'tem habilitação'];

echo dirigir($reginaldo);
echo "<hr>";
echo podeDirigir($reginaldo['idade'],$reginaldo['temHabilitação']);


echo "<hr>";

