<?php

include '../../lib/bd/conexao.php'; //incluir o arquivo para usar a conexão com banco de dados

$categoria=$_POST['categoria'];//name(do html)=[] //RECEBE O VALOR DO ATRIBUTO


$sql ="INSERT INTO `tb_categoria`(`nome_categoria`) VALUES ('$categoria')";

$cetegoria = mysqli_query($conexao,$sql);
// pega a variavel conexão,conecta no banco de dados,e depois ele da o comando sql($sql) para validação


?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="../../lib/css/style.css">
<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<div class="container" id="tamanho_container">
	<center>
		<h3 id="todo_listar_h">Categoria adicionado com Sucesso</h3>
			<div id="topo_listar">
			<a href="adicionar_categoria.php" role="button" id="botao_cadastrar" class="btn btn-sm">Cadastrar nova categoria</a><br><br>
			<a href="listar_categoria.php" id="botao_listar" class="btn btn-sm">Ir para Lista de Categorias</a>
	</center>
			</div>
	</div>