<?php include 'topo.php' ?>
<?php include 'data_base.php' ?>

<div class="container">
	<div class="page-header">
		<h2> ALUNOS </h2>
	</div>
	
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">Data de Nascimento</th>
     </tr>
  </thead>
  <tbody>
    <?php if(listaAlunos()):?>

    	<?php foreach (listaAlunos() as $aluno):?>

    		<tr>
    			<td><?php echo $aluno['id'];?></td>
    			<td><?php echo $aluno['nome'];?></td>
    			<td><?php echo $aluno['email'];?></td>
          <td><?php echo $aluno['senha'];?></td>
    			<td><?php echo $aluno['cpf'];?></td>
    			<td><?php echo $aluno['rg'];?></td>
    			<td><?php echo $aluno['dt_nasc'];?></td>
        </tr>

      <?php endforeach; ?>
    <?php endif; ?>

  </tbody>

  <tr>
        <td>
          <a href="edit.php?id=<?php echo $aluno['id'];?>" class="btn btn-info">Editar Aluno </a>
          <a href="delete.php?id=<?php echo $aluno['id'];?>" class="btn btn-info">Deletar Aluno </a>
        </td>
  </tr>
  </table>
  
<a href="index.php" class="btn btn-warning">Voltar</a>
</div>

<?php include 'rodape.php' ?>

