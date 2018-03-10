<?php include 'topo.php' ?>
<?php include 'data_base.php' ?>

<div class="container">
	<div class="page-header">
		<h2> CURSOS </h2>
	</div>
	
	<a class="btn btn-primary" href="alunos.php" role="button">Alunos</a>
	<a class="btn btn-primary" href="turmas.php" role="button">Turma</a>
	<a class="btn btn-primary" href="cursos.php" role="button">Cursos</a>


	
<div class="pull-right">
		<a href="cadastro.php" class="btn btn-primary">Cadastro Aluno</a>
</div>

<tbody>

		<?php if(listaAlunos()) :?>

		<?php foreach (listaAlunos() as $aluno):
			echo "<br>";
			echo "<br>";

		?>

		
		<?php endforeach; ?>
		<?php endif; ?>
		
</tbody>

</div>

<?php include 'rodape.php' ?>

