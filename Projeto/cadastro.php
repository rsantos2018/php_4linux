<?php include 'topo.php' ?>
<?php include 'data_base.php' ?>

<div class="container">

	<div class="page-header">
		<h2>Cadastro <small>Aluno</small></h2>	
	</div>

	<form action="#" method="POST">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" placeholder="Nome" required>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" name="rg" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="dataNascimento">Data Nascimento</label>
			<input type="date" name="dt_nasc" class="form-control" required>
		</div>

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>

<?php 
	if (!empty($_POST)){
		$aluno = [
			'nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => $_POST['senha'],
			'cpf' => $_POST['cpf'],
			'rg' => $_POST['rg'],
			'dt_nasc' => $_POST['dt_nasc'],
		];

		insereAluno($aluno);
		header("Location:index.php");
	}

	
?>

<?php include 'rodape.php' ?>