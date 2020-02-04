<?php 

include '../../lib/bd/conexao.php';

$id = $_POST['id'];
//$nro_produto = $_POST['nro_produto'];
$nome_fornecedor = $_POST['nome_fornecedor'];


$sql = "UPDATE tb_fornecedor SET nome_fornecedor='$nome_fornecedor' WHERE id_fornecedor = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../lib/css/style.css">
<div class="container" id="tamanho_container">
	<center>
		<h3 id="topo_listar_h">Fornecedor Atulizado com Sucesso!</h3>
		<div id="topo_listar">
		<a href="listar_fornecedor.php" id="botao_listar" class="btn btn-sm ">Voltar para Listas de Fornecedores</a>
		</div>
	</center>
</div>

