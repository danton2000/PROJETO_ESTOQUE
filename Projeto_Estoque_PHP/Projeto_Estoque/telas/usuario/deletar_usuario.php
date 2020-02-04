<?php
include '../../lib/bd/conexao.php';

$id_usuario = $_GET['id_usuario'];

$deletar = "DELETE FROM tb_usuario where id_usuario = $id_usuario";
$fila = mysqli_query($conexao, $deletar);

header("location: listar_usuario.php");//faz a ação e depois volta para tela APROVAR_USUARIO.PHP//
	
?>