<!DOCTYPE html>
<html>
<head>
	<title>Calculo dos números</title>
</head>
<body>
<h2> Calculo de Números </h2>
<form action="" method="POST">
	
	<label for="N1">Digite o primeiro número: </label>
	<input type="number" name="N1"><br><br><br>

	<label for="N2">Digite o segundo número: </label>
	<input type="number" name="N2"><br>

	<input type="submit" value="Enviar"><br>

</form>

<?php

		if(!empty($_POST)){

			$soma = $_POST['N1'] + $_POST['N2'];
			echo "A soma dos números são: " . $soma;
			echo "<br>";
			$sub = $_POST['N1'] - $_POST['N2'];
			echo "A subtração dos números são:" . $sub;
			$sub = $_POST['N1'] * $_POST['N2'];
			echo "A multiplicação dos números são:" . $sub;
			$sub = $_POST['N1'] / $_POST['N2'];
			echo "A divisão dos números são:" . $sub;

		}

	?>


</body>
</html>