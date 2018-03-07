<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de número</title>
	<meta charset="UTH-8">	
</head>
<body>
<form action="" method = "POST">
<input type="number" name="num1" placeholder="numero 1">

<input type="number" name="num2" placeholder="numero 2">

<select name = "op">
	<option value="soma">Somar</option>
	<option value="subtracao">Subtrair</option>
	<option value="multiplicacao">Multiplicar</option>
	<option value="divisao">Dividir</option>
</select>

<input type="submit" value="calcular">

</form>

<?php 
	if(!empty($_POST)){

		switch ($_POST['op']) {
			case 'soma':
				$result = $_POST['num1'] + $_POST['num2'];
				break;

			case 'subtracao':
				$result = $_POST['num1'] - $_POST['num2'];
				break;

			case 'multiplicacao':
				$result = $_POST['num1'] * $_POST['num2'];
				break;
			
			case 'divisao':
				$result = $_POST['num1'] / $_POST['num2'];
				break;
			default:
				$result = 'Inválido';
				break;
		}

		echo "Resultado: " . $result;
	}


?>

</body>
</html>