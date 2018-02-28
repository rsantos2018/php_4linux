<?php

echo "<pre>";

for ($cont = 0; $cont <=10; $cont++){
	if ($cont == 5){
		continue;
	}

	echo $cont . "\n";

}

echo "<hr>";

for ($cont = 0; $cont <=10; $cont ++){
	
	if ($cont == 5){

		break;
	}
	echo "numero $cont" . "\n";
}
	