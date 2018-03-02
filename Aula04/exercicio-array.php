<?php
echo "<pre>";

$pessoa = ['Reginaldo', 25, 'reginaldo@gmail.com'];
echo "Meu nome é: " . $pessoa[0];
echo "<br>";
echo "Tenho " . $pessoa[1] . " anos." . "\n";
echo "Meu email é: " . $pessoa[2];

echo "<hr>";

$pessoas = [
			'cliente1' => 	[ 'nome' => "Sandra",
							  'idade' => 24,
							  'email' => "sandra@terra.com.br"

							],

			'cliente2' => 	[ 'nome' => "Carlos",
							  'idade' => 32,
							  'email' => "cmacedo@terra.com.br"

							],
			
			'cliente3' => 	[ 'nome' => "Maria",
							  'idade' => 24,
							  'email' => "maria@terra.com.br"

							]

			];

echo "Meu nome é: " . ($pessoas['cliente1'] ['nome'] . "\n");
echo "Tenho " . ($pessoas['cliente1'] ['idade']) . " anos" . "\n";
echo "Meu email é: " . ($pessoas['cliente1'] ['email']);
echo "<hr>";

echo "Meu nome é: " . ($pessoas['cliente2'] ['nome'] . "\n");
echo "Tenho " . ($pessoas['cliente2'] ['idade']) . " anos" . "\n";
echo "Meu email é: " . ($pessoas['cliente2'] ['email']);
echo "<hr>";

echo "Meu nome é: " . ($pessoas['cliente3'] ['nome'] . "\n");
echo "Tenho " . ($pessoas['cliente3'] ['idade']) . " anos" . "\n";
echo "Meu email é: " . ($pessoas['cliente3'] ['email']);
echo "<hr>";



foreach ($pessoas as $cliente) {
	echo "Meu nome é: " . $cliente['nome'] ."\n";
	echo "Tenho: " . $cliente['idade'] . " anos." . "\n";
	echo "Meu email é: " . $cliente['email'] ."\n";
	echo "<br>";

}
