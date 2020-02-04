<?php
 
include '../../lib/bd/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `tb_fornecedor` WHERE id_fornecedor = $id";

$deletar = mysqli_query($conexao, $sql);

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../lib/css/style.css">
<div class="container" id="tamanho_container">
	<center>
		<h3 id="topo_listar_h">Fornecedor Deletado com Sucesso!</h3>
		<div id="topo_listar">
		<a href="listar_fornecedor.php" id="botao_listar" class="btn btn-sm">Voltar para Listas de Fornecedores</a>
		</div>
	</center>
</div>