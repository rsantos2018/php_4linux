<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>4linux - Form</title>
	<style type="text/css">{
		body(background-color:#ffffff; )
	}
	</style>
	<script type="text/javascript">
	</script>
</head>
<div class="container">
<body>
<pre> 
	<h2> Meu Form </h2>

	<form action="processa.php" method="POST">
				
		<label for="nome">Nome:</label>
		<input type="text" name="nome">


		<label>Data de Nascimento: </label>
		<input type="date" name="data">

		<label>Idade: </label>
		<input type="number" name="idade">

		<label>Email: </label>
		<input type="email" name="email">

		<label>Senha: </label>
		<input type="password" name="senha">

		<label>Sexo: </label>
		<input type="radio" name="sexo" checked="Masculino" value="M">Masculino
		<input type="radio" name="sexo" checked="Feminino" value="F"> Feminino

		<label>Cursos: </label>
		<input type="checkbox" name="curso" checked="php" value="php"> PHP
		<input type="checkbox" name="curso" value="linux"> LINUX
		<input type="checkbox" name="curso" value="php_essenciais"> PHP ESSENCIAIS

		<label>Cor: </label>
		<input type="color" name="cor">

	
		<input type="submit" value="Enviar"><br>
		
	</form>
	<?php
		if(!empty($_POST)){
			$msg = "<p> Olá, eu sou o {$_POST['nome']}, tenho {$_POST['idade']}, etc. </p>";
			echo $msg;
			
		}

		if(!empty($_GET)){
			print_r($_GET);
		}

	?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</div>
</html>