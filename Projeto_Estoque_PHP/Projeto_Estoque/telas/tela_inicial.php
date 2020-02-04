<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/css/style.css">
  <script src="https://kit.fontawesome.com/06ffaaed9a.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <?php
    session_start();

    $login_usuario = $_SESSION['login_usuario'];

    if(!isset($_SESSION['login_usuario'])) {
      header('Location: ../index.php');
    }

    include '../lib/bd/conexao.php';
    $sql = "SELECT nivel_usuario FROM tb_usuario WHERE email_usuario = '$login_usuario' AND status = 'Ativo'";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel_usuario'];
  ?>

	
    <div class="container" id="esquerda">
      <a href="../index.php" role="button" id="botao_voltar_login" class="btn btn-sm"><i class="fas fa-door-open"></i>Sair do sistema</a>
      <center id="mostra_usuario">
      <label id="label">USUÁRIO</label>
      <input type="text" class="form-control" id="mostra_usuario_input" value="<?php echo $login_usuario ?>" readonly>
      </center>    
    </div>

  <center>
  <div class="container" id="icones_menu">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <div class="hoverzoom">
          <img  id="img_produtos" class="img-thumbnail" src="../lib/img/produtos.png">
          <div class="retina">
              <?php
                if(($nivel == 1) || ($nivel == 2)){
              ?>
              <a href="../telas/produto/adicionar_produto.php" id="botao_adicionar" class="a1 btn btn-sm">Cadastrar Produtos</a>
              <?php } ?>
              <a href="../telas/produto/listar_produto.php" id="botao_editar" class="a2 btn btn-sm">Listar Produtos</a>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="hoverzoom">
          <img  id="img_produtos" class="img-thumbnail" src="../lib/img/categorias.png">
          <div class="retina">
              <?php
                if(($nivel == 1) || ($nivel == 2)){
              ?>
              <a href="../telas/categoria/adicionar_categoria.php" id="botao_adicionar" class="a1 btn btn-sm">Cadastrar Categorias</a>
              <?php } ?>
              <a href="../telas/categoria/listar_categoria.php" id="botao_editar" class="a2 btn btn-sm">Listar Categorias</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-5">
        <div class="hoverzoom">
          <img  id="img_produtos" class="img-thumbnail" src="../lib/img/fornecedores.jpg">
          <div class="retina">
            <?php
              if(($nivel == 1) || ($nivel == 2)){
            ?>
            <a href="../telas/fornecedor/adicionar_fornecedor.php" id="botao_adicionar" class="a1 btn btn-sm">Cadastrar Fornecedor</a>
            <?php } ?>
            <a href="../telas/fornecedor/listar_fornecedor.php" id="botao_editar" class="a2 btn btn-sm">Listar Fornecedor</a>
          </div>
        </div>
      </div>
    
      <div class="col-md-5">
        <div class="hoverzoom">
          <img  id="img_produtos" class="img-thumbnail" src="../lib/img/usuarios.png">
          <div class="retina">
            <a href="../telas/usuario/listar_usuario.php" id="botao_adicionar" class="a1 btn btn-sm">Listar Usuarios Ativos</a>
            <?php
              if(($nivel == 1) || ($nivel == 2)){
            ?>
            <a href="../telas/usuario/listar_usuario_inativo.php" id="botao_inativo" class="a2 btn btn-sm">Listar Usuarios Inativos</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>   
</center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha385-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>