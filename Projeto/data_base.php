<?php
require_once 'conexao.php';

function listaAlunos(){
	$con = conecta();
	$sql = "SELECT * FROM tb_alunos";
	$result = pg_query($con, $sql);
	$alunos = pg_fetch_all($result);
	desconecta($con);
	return $alunos;
}
function listaAlunoPorId($id){
	$con = conecta();
	$sql = "SELECT * FROM tb_alunos WHERE id={$id}";	
	$result = pg_query($con, $sql);	
	$alunos = pg_fetch_assoc ($result);
	desconecta($con);
	return $alunos;
}
function insereAluno(array $aluno){
	$con = conecta();
	
	$sql = "INSERT INTO tb_alunos(nome,email, senha, cpf, rg, dt_nasc) VALUES('{$aluno['nome']}','{$aluno['email']}', '{$aluno['senha']}','{$aluno['cpf']}','{$aluno['rg']}', '{$aluno['dt_nasc']}')";
	
	pg_query($con,$sql);
	
	desconecta($con);
}
function atualizaUsuario(array $usuario){
	$con = conecta();
	$sql = "UPDATE usuarios SET usuario = '{$usuario['usuario']}',senha='{$usuario['senha']}' WHERE id={$usuario['id']}";
	pg_query($con,$sql);
	desconecta($con);
}
function deletaUsuario($id){
	$con = conecta();
	$sql = "DELETE FROM usuarios WHERE id={$id}";
	pg_query($con,$sql);
	desconecta($con);
}