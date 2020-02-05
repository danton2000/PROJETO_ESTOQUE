<?php
include '../../lib/bd/conexao.php';
include '../../lib/script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$nivel_usuario = $_POST['nivel_usuario'];
$status = 'Ativo';

$sql = "INSERT INTO tb_usuario (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status) values ('$nome_usuario','$email_usuario',sha1('$senha_usuario'),$nivel_usuario,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../lib/css/style.css">
	<div class="container" id="tamanho_container">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<center>
		<h3 id="topo_listar_h">Usuário cadastrado com Sucesso</h3>
		<div id="topo_listar">
			<a href="cadastro_usuario.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar um novo Usuário</a><br><br>
			<a href="../tela_inicial.php" id="botao_listar" class="btn btn-sm">Ir para lista tela de Menus</a>
		</center>
		</div>
	</div>