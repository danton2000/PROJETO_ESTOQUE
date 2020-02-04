<?php

include '../../lib/bd/conexao.php'; //incluir o arquivo para usar a conexão com banco de dados

$nro_produto=$_POST['nro_produto'];//name(do html)=[] //RECEBE O VALOR DO ATRIBUTO
$nome_produto=$_POST['nome_produto'];
$categoria=$_POST['categoria'];
$quantidade=$_POST['quantidade'];
$fornecedor=$_POST['fornecedor'];

$sql ="INSERT INTO `tb_produto`(`nro_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nro_produto,'$nome_produto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);
// pega a variavel conexão,conecta no banco de dados,e depois ele da o comando sql($sql) para validação


 ?>

<meta charset="utf-8">
<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<div class="container" id="tamanho_container">
		<center>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<h3 id="topo_listar_h">Produto adicionado com Sucesso</h3>
		<div id="topo_listar">
			<a href="adicionar_produto.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar novo Produto</a><br><br>
			<a href="listar_produto.php" id="botao_listar" class="btn btn-sm">Ir para lista de produtos</a>
		</center>
		</div>
	</div>