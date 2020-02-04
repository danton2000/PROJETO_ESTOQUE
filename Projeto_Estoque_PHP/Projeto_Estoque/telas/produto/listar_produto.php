<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Produtos</title>
  	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="../../lib/css/style.css">
	<script src="https://kit.fontawesome.com/06ffaaed9a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<?php
	//SÓ ENTRA SE ESTIVER LOGADO
		session_start();

		$login_usuario = $_SESSION['login_usuario'];

		if(!isset($_SESSION['login_usuario'])) {
		header('Location: ../index.php');
		}

		include '../../lib/bd/conexao.php';
		$sql = "SELECT nivel_usuario FROM tb_usuario WHERE email_usuario = '$login_usuario' AND status = 'Ativo'";
		$buscar = mysqli_query($conexao, $sql);
		$array = mysqli_fetch_array($buscar);
		$nivel = $array['nivel_usuario'];

	?>


	<div class="container" id="topo_listar_itens"><!-- colocar os espaçamentos ficando esponsivo-->
      <div id="botao_direita">
        <a href="../tela_inicial.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
      </div>
		<h3>Lista de Produtos</h3>
	<br>
		<table class="table" id="topo_tabela">
  			<thead>
    			<tr>
      				<th scope="col">Numero do Produto</th><!-- col = coluna -->
      				<th scope="col">Nome do Produto</th>
      				<th scope="col">Categoria</th>
      				<th scope="col">Quantidade</th>
      				<th scope="col">Fornecedor</th>
      				<th scope="col">Ação</th>
   				 </tr>
  			</thead>

  			    	<?php
            
    				include '../../lib/bd/conexao.php';
    				$sql = "SELECT * FROM `tb_produto`";
    				$busca = mysqli_query($conexao,$sql);
					//laço de repetição com array,armazenado linhas no array
    				while($array = mysqli_fetch_array($busca)){

    					$id_produto = $array['id_produto'];
    					$nro_produto = $array['nro_produto'];
    					$nome_produto = $array['nome_produto'];
    					$categoria = $array['categoria'];
    					$quantidade = $array['quantidade'];
    					$fornecedor = $array['fornecedor'];//colunas

    				?>

    			<tr>
      				<td><?php echo $nro_produto ?></td><!--th = células(linha+colunas preenchidas) -->
      				<td><?php echo $nome_produto ?></td>
      				<td><?php echo $categoria ?></td>
      				<td><?php echo $quantidade ?></td>
      				<td><?php echo $fornecedor ?></td>
      				<td>
						<?php

						if(($nivel == 1) || ($nivel == 2)){	

						?>
					<a class="btn btn-sm" id="botao_editar" href="editar_produto.php?id=<?php echo $id_produto ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a><!--&nbsp = espaço do icone;  i class = icone edit;
					?id = <?php echo $id_estoque ?> = pego o produto pelo id -->
					  
					<?php }
					
						if(($nivel == 1)){
					
					?>

					<a class="btn btn-sm" id="botao_deletar" href="deletar_produto.php?id=<?php echo $id_produto ?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Deletar</a>
					
					<?php } ?>
					
					</td>	  
    			</tr>
  			   <?php } ?>
		</table>

	</div>

  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>