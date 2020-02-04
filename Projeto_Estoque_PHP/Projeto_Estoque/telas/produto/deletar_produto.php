<?php 
include '../../lib/bd/conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `tb_produto` WHERE id_produto = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<div class="container" id="tamanho_container">
	<center>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<h3 id="topo_listar_h">Produto Deletado com Sucesso!</h3>
		<div id="topo_listar">
			<a href="listar_produto.php" id="botao_listar" class="btn btn-sm">Voltar para Listas de Produtos</a>
		</div>
	</center>
</div>