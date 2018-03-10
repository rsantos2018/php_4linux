<?php include 'topo.php' ?>
<?php include 'data_base.php' ?>
<?php 
	$alunos = listaAlunoPorId($_GET['id']); 
?>

<div class="container">
	<div class="page-header">
		<h2>Editar <small>Aluno</small></h2>	
	</div>

	<form action="#" method="POST">
		
		<div class="form-group">
			<label for="aluno">Id Aluno</label>
			<input type="text" name="id" value="<?php echo $alunos['id'];?>" class="form-control" disable>
		</div>

		<div class="form-group">
			<label for="aluno">Aluno</label>
			<input type="text" name="nome" value="<?php echo $alunos['nome'];?>" name="nome" class="form-control" placeholder="Nome" required>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $alunos['email'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="text" name="senha" value="<?php echo $alunos['senha'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="CPF" value="<?php echo $alunos['cpf'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" name="RG" value="<?php echo $alunos['rg'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="dt_nasc">Data de Nascimento</label>
			<input type="text" name="dt_nasc" value="<?php echo $alunos['dt_nasc'];?>" class="form-control" required>
		</div>
		

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>
</div>

<?php 
	if (!empty($_POST)){
		$usuario = [
			'usuario' => $_POST['usuario'],
			'senha' => $_POST['senha']
		];
		
		atualizaUsuario($usuario);
		header("Location:index.php");
	}
?>

<?php include 'rodape.php' ?>