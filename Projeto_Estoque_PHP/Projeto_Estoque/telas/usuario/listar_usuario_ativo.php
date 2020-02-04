<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Categorias</title>
  <link rel="stylesheet" href="../../lib/css/style.css">
  <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/06ffaaed9a.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" id="tamanho_container_tab"><!-- colocar os espaçamentos ficando esponsivo-->
      <div id="botao_direita">
        <a href="../tela_inicial.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
      </div>
		<h3>Lista de Usuários(Ativos)</h3><br>
		<table class="table" id="topo_tabela">
  			<thead>
    			<tr>
      				<th scope="col">Nome</th><!-- col = coluna -->
      				<!--<th scope="col">Email</th>-->
              <th scope="col">Nìvel</th>
              <th scope="col">Ação</th>
   				 </tr>
  			</thead>

            <?php
            include '../../lib/bd/conexao.php';
    				$sql = "SELECT * FROM tb_usuario WHERE status = 'Ativo'";
    				$busca = mysqli_query($conexao,$sql);
					   //laço de repetição com array,armazenado linhas no array
    				while($array = mysqli_fetch_array($busca)){

    				$id_usuario = $array['id_usuario'];
    				$nome_usuario = $array['nome_usuario'];
            $nivel_usuario = $array['nivel_usuario'];
            //colunas
    				?>

    			<tr>
      				<td><?php echo $nome_usuario ?></td><!--th = células(linha+colunas preenchidas) -->
              <td><?php echo $nivel_usuario ?></td>
              <td>
                <a class="btn btn-sm" id="botao_editar" href="editar_usuario.php?id_usuario=<?php echo $id_usuario ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

                <a class="btn btn-sm" id="botao_deletar" href="deletar_usuario.php?id_usuario=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Deletar</a> 
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