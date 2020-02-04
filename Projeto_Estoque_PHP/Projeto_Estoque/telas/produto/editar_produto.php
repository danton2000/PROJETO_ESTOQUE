<?php
include '../../lib/bd/conexao.php';

$id = $_GET['id'];//pegando o id e mostrando na tela.

?>

<!DOCTYPE html><!--shift + alt + 2 = dividir tela, 1 fecha a tela -->
<html>
<head>
	<meta charset="utf-8">
	<title>Editar de Produtos</title>
	<link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../lib/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	<!--container = espaçamento -->	<!--id = identificação. #=css -->
<div class="container" id="tamanho_container"><!-- distancia do topo de:40px -->
	<div id="botao_direita">
      <a href="listar_produto.php" role="button" id="botao_voltar" class="btn btn-sm">Voltar</a>
    </div>    
	<h4>Formulário de Cadastro de Produtos</h4>
	
	<form id="espaçamento" action="atualizar_produto.php" method="POST"><!-- Enviar uma informação = POST,Pegar um valor = GET --> <!--distancia de 20px do form -->

		<?php 

		$sql = "SELECT * FROM `tb_produto` WHERE id_produto = $id";
		$buscar  = mysqli_query($conexao,$sql);
		while ($array = mysqli_fetch_array($buscar)) {

		  $id_produto = $array['id_produto'];
    	$nro_produto = $array['nro_produto'];
    	$nome_produto = $array['nome_produto'];
    	$categoria = $array['categoria'];
    	$quantidade = $array['quantidade'];
    	$fornecedor = $array['fornecedor'];

		?>

  		<div class="form-group">
    		<label>N° do Produto</label>
    		<input type="number" class="form-control" name="nro_produto" value="<?php echo $nro_produto ?>" disabled>
    		<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none"> <!-- deixa esse input invisivel -->
    	</div>

    	<div class="form-group">
    		<label>Nome do Produto</label>
    		<input type="text" class="form-control" name="nome_produto" value="<?php echo $nome_produto ?>"   autocomplete="off"><!--required = não pode ser em branco --> <!-- autocomplete="off" = não salva os nomes -->
    	</div>

    	<div class="form-group">
    		<label>Categoria</label>
    		<select class="form-control" name="categoria"required>
          
          <?php  
            include '../lib/bd/conexao.php';
            $sql = "SELECT * FROM tb_categoria order by nome_categoria ASC";
            $buscar = mysqli_query($conexao ,$sql);

            while($array = mysqli_fetch_array($buscar)){

              $id_categoria = $array['id_categoria'];
              $categoria = $array['nome_categoria'];
            ?>
            <option><?php echo $categoria ?></option>
          <?php } ?>

          </select>

  		</div>

    	<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
    	</div>

    	<div class="form-group">
    		<label>Fornecedor</label>
    		<select class="form-control" name="fornecedor">

    			<?php  
            include '../bd/conexao.php';
            $sql_2 = "SELECT * FROM tb_fornecedor order by nome_fornecedor ASC";
            $buscar_2 = mysqli_query($conexao ,$sql_2);

            while($array_2 = mysqli_fetch_array($buscar_2)){
              $id_fornecedor = $array_2['id_fornecedor'];
              $nome_fornecedor = $array_2['nome_fornecedor'];
            ?>
            <option><?php echo $nome_fornecedor ?></option>
          <?php } ?>

          </select>
  		</div>

  		<!-- DEIXANDO O BOTÃO NO LADO DIREITO -->
  		<div id="botao_direita">
  		<button type="submit" id="botao_editar" class="btn btn-sm">Editar Produto</button><!--submit = enviar as informações -->
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