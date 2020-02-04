<?php

include '../../lib/bd/conexao.php'; //incluir o arquivo para usar a conexão com banco de dados

$fornecedor=$_POST['fornecedor'];//name(do html)=[] //RECEBE O VALOR DO ATRIBUTO


$sql ="INSERT INTO `tb_fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";

$cetegoria = mysqli_query($conexao,$sql);
// pega a variavel conexão,conecta no banco de dados,e depois ele da o comando sql($sql) para validação


?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../lib/css/style.css">
	<div class="container" id="tamanho_container">
		<center>
		<h3 class="topo_lista_h">Fornecedor adicionado com Sucesso</h3>
		<div id="topo_listar">
			<a href="adicionar_fornecedor.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar um novo fornecedor</a><br><br>
			<a href="listar_fornecedor.php" id="botao_listar" class="btn btn-sm">Ir para Listas de Fornecedores</a>
		</center>
		</div>
	</div>