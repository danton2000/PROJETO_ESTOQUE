<?php

include '../../lib/bd/conexao.php';

$id = $_GET['id'];//pegando o id e mostrando na tela.

?>

<!DOCTYPE html><!--shift + alt + 2 = dividir tela, 1 fecha a tela -->
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Categoria</title>
	<link rel="stylesheet" href="../../lib/css/style.css">
	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	<!--container = espaçamento -->	<!--id = identificação. #=css -->
<div class="container" id="tamanho_container"><!-- distancia do topo de:40px -->
	<div id="botao_direita">
      <a href="listar_categoria.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
    </div>    
	<h4>Formulário de Edição de Categoria</h4>
	
	<form id="espaçamento" action="atualizar_categoria.php" method="POST"><!-- Enviar uma informação = POST,Pegar um valor = GET --> <!--distancia de 20px do form -->
		<?php

		$sql = "SELECT * FROM `tb_categoria` WHERE id_categoria = $id";
		$buscar  = mysqli_query($conexao,$sql);

		while ($array = mysqli_fetch_array($buscar)) {
		$id_categoria = $array['id_categoria'];
    	$nome_categoria = $array['nome_categoria'];
    
		?>

		<div class="form-group">
			<label>Nome da Categoria</label>
			<input type="text" class="form-control" name="id" value="<?php echo $id_categoria?>" style="display: none"><!--required = não pode ser em branco --> <!-- autocomplete="off" = não salva os nomes -->
			<input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria?>"autocomplete="off">
		</div>

			<!-- DEIXANDO O BOTÃO NO LADO DIREITO -->
		<div id="botao_direita">
			<button type="submit" id="botao_editar" class="btn btn-sm">Editar Categoria</button><!--submit = enviar as informações -->
		</div>
		<?php } ?>
  	</form>
</div>

<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>