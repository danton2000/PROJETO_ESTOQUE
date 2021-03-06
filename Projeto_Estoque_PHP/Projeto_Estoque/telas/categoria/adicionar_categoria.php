<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Categoria</title>
	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../lib/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container" id="tamanho_container"><!-- distancia do topo de:40px-->
		<div id="botao_direita">
      	<a href="../tela_inicial.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
    	</div> 

  		
  		<h4>Cadastro de Categorias</h4>
  		

  		<form id="espaçamento" action="inserir_categoria.php" method="POST"><!-- Enviar uma informação = POST,Pegar um valor = GET --> <!--distancia de 20px do form -->
  		<div class="form-group">
    		<label>Nome da Categoria</label>
    		<input type="text" class="form-control" name="categoria" placeholder="Insira o nome da categoria"required autocomplete="off">
    	</div>

    	<div id="botao_direita">
  		<button type="submit" id="botao_cadastrar" class="btn btn-sm">Adicionar</button><!--submit = enviar as informações -->
     	</div>

    	</form>

	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>