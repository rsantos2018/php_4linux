<?php

//HEREDOC, maneira de escrever texto podendo utilizar conteúdo de variável.

echo "<pre>";

$nome = Reginaldo;

$texto = <<< TXT
lfkajdçlak
lçdkjaldka]
$nome
çaldkfjaldk
TXT;

echo $texto;

//NOWDOC SÓ COLOCAR ASPAS SIMPLES NO PRIMEIRO TXT, IRÁ ENTENDER COMO SIMPLES TEXTO NÃO ENTENDERÁ A CONTEÚDO DE VARIAVEL.

echo "<pre>";

$nome = Reginaldo;

$texto = <<< 'TXT'
lfkajdçlak
lçdkjaldka]
$nome
çaldkfjaldk
TXT;

echo $texto;
