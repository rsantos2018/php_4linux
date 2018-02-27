<?php

$nome = "João";
echo $nome;
echo "<br>";
$nomeCompleto = "João Doria";
echo $nomeCompleto;
echo "<br>";
echo "<hr>";

//Criar variaveis
// idade
// cidade
// sexo

$idade = "48";
$cidade = "São Paulo";
$sexo = "Masculino";

echo "Minha idade é: " . ($idade) ;
echo "<br>";
echo "Eu resido em: " . $cidade ; 
echo "<br>";
echo "O sexo é:" . $sexo; 
echo "<br>";
var_dump($idade);
echo "<br>";
echo "<hr>";

//constantes
define ("VERSAO",2);
echo "Fusca";
echo VERSAO;

echo "<hr>";
//Boolean
$verdadeiro = true;
$falso = false;
var_dump($verdadeiro);
echo "<br>";
var_dump($falso);

echo "<hr>";

//Float
$flutuante = 2.5;
var_dump($flutuante);

//Objeto
echo "<hr>";
$objeto = new stdClass;
var_dump($objeto);

echo "<hr>";
//Null
$nulo = null;
var_dump($nulo);

echo "<hr>";
$array = [];
var_dump($array);
echo "<hr>";



