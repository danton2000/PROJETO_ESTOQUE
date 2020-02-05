<?php
include '../../lib/bd/conexao.php';
include '../../lib/script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
//$nivel_usuario = $_POST['nivel_usuario'];
$status = 'Inativo';

$sql = "INSERT INTO tb_usuario (nome_usuario,email_usuario,senha_usuario,status) values ('$nome_usuario','$email_usuario',sha1('$senha_usuario'),'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../lib/css/style.css">
	<div class="container" id="tamanho_container">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<center>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<h3 id="topo_listar_h">Usuário cadastrado com Sucesso, esperando aprovação</h3>
		<div id="topo_listar">	
			<a href="../../index.php" role="button" id="botao_cadastrar" class="btn btn-sm">Voltar para tela de Login!</a><br><br>
		</center>
		</div>
	</div>