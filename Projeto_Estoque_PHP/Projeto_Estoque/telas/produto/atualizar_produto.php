<?php 

include '../../lib/bd/conexao.php';

$id = $_POST['id'];
//$nro_produto = $_POST['nro_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `tb_produto` SET `nome_produto`='$nome_produto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_produto = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<div class="container" id="tamanho_container">
	<center>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<h3 id="topo_listar_h">Produto Atulizado com Sucesso!</h3>
		<div id="topo_listar">
		<a href="listar_produto.php" id="botao_listar" class="btn btn-sm ">Voltar para Listas de Produtos</a>
		</div>
	</center>
</div>

