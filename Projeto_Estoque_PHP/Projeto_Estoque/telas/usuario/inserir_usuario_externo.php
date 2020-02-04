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

<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<div class="container" id="tamanho_container">
		<center>
		<h3 id="topo_listar_h">Usuário cadastrado com Sucesso, esperando aprovação</h3>
		<div id="topo_listar">
			
			<a href="../../lib/script/password.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar um novo Usuário</a><br><br>
			<a href="../tela_inicial.php" id="botao_listar" class="btn btn-sm">Ir para lista tela de Menus</a>
		</center>
		</div>
	</div>