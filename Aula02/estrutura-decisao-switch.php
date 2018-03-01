<?php

$nome = readline("Digite seu nome: ");


switch ($nome) {
	case 'Reginaldo':
		echo "Boa noite, Reginaldo";
		break;

	case 'Lucas':
		echo "Boa noite, Lucas";
		break;

	default:
		echo "Boa noite, Estranho!!!";
		break;
}
