<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Categorias</title>
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

	<div class="container" id="tamanho_container_tab"><!-- colocar os espaçamentos ficando esponsivo-->
      <div id="botao_direita">
        <a href="../tela_inicial.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
      </div>
		<h3>Lista de Categorias</h3><br>
		<table class="table" id="topo_tabela">
  			<thead>
    			<tr>
      				<th scope="col">Nome da Categoria</th><!-- col = coluna -->
      				<th scope="col">Ação</th>
   				 </tr>
  			</thead>

            <?php
            include '../../lib/bd/conexao.php';
    				$sql = "SELECT * FROM `tb_categoria`";
    				$busca = mysqli_query($conexao,$sql);
					   //laço de repetição com array,armazenado linhas no array
    				while($array = mysqli_fetch_array($busca)){
    				$id_categoria = $array['id_categoria'];
    				$nome_categoria = $array['nome_categoria'];
   					//colunas
    				?>

    			<tr>
      				<td><?php echo $nome_categoria ?></td><!--th = células(linha+colunas preenchidas) -->
      				
      				<td>
					  	<?php

							if(($nivel == 1) || ($nivel == 2)){	

						?>
						
						<a class="btn btn-sm" id="botao_editar" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a><!--&nbsp = espaço do icone;  i class = icone edit;
      					?id = <?php echo $id_estoque ?> = pego o produto pelo id -->
						
						<?php }
					
							if(($nivel == 1)){
				
						?>

                 		<a class="btn btn-sm" id="botao_deletar" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Deletar</a> 
						
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