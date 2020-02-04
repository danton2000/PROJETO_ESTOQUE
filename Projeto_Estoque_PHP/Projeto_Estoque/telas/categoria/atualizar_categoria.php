<?php 

include '../../lib/bd/conexao.php';

$id = $_POST['id'];
//$nro_produto = $_POST['nro_produto'];
$nome_categoria = $_POST['nome_categoria'];


$sql = "UPDATE tb_categoria SET nome_categoria='$nome_categoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<div class="container" id="tamanho_container">
	<center>
		<h3 id="topo_listar_h">Categoria Atulizado com Sucesso!</h3>
		<div id="topo_listar">
		<a href="listar_categoria.php" id="botao_listar" class="btn btn-sm ">Voltar para Listas de Categorias</a>
		</div>
	</center>
</div>

