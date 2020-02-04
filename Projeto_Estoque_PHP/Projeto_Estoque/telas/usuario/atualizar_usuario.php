<?php 

include '../../lib/bd/conexao.php';

$id_usuario = $_POST['id_usuario'];
//$nro_produto = $_POST['nro_produto'];
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$nivel_usuario = $_POST['nivel_usuario'];


$sql = "UPDATE `tb_usuario` SET `nome_usuario`='$nome_usuario',`email_usuario`='$email_usuario',`nivel_usuario`=$nivel_usuario WHERE id_usuario = $id_usuario";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<div class="container" id="tamanho_container">
	<center>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<h3 id="topo_listar_h">Usuário Atualizado com Sucesso!</h3>
	<div id="topo_listar">
		<a href="listar_usuario.php" id="botao_listar" class="btn btn-sm ">Voltar para Listas de Usuários</a>
	</div>
	</center>
</div>

