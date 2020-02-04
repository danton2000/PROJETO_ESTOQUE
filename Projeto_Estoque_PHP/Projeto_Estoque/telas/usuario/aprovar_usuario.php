<?php
include '../../lib/bd/conexao.php';

$id_usuario = $_GET['id_usuario'];
$nivel_usuario = $_GET['nivel_usuario'];


if ($nivel_usuario == 1){

	$update = "UPDATE tb_usuario SET status= 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id_usuario";
	$atualizacao = mysqli_query($conexao, $update);
	echo "ADMINISTRADOR APROVADO";
}

if ($nivel_usuario == 2){

	$update = "UPDATE tb_usuario SET status= 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id_usuario";
	$atualizacao = mysqli_query($conexao, $update);
	echo "FUNCIONARIO APROVADO";
}

if ($nivel_usuario == 3){

	$update = "UPDATE tb_usuario SET status= 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id_usuario";
	$atualizacao = mysqli_query($conexao, $update);
	echo "CONFERENTE APROVADO";
}

header("location: listar_usuario_inativo.php");
?>