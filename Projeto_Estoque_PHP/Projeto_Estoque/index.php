<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
</head>

<body>
	<div class="container" id="tamanho_login">
		<div id="espaço">
			<center>
			<img  id="imagem_login" src="lib/img/cadeado.png">
			</center>	
			<form action="lib/action/index1.php" method="POST">
				<div class="form-group">
					<label>Usuário</label>
					<input type="text" name="login_usuario" class="form-control" placeholder="Insira o seu email" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha_login" class="form-control" placeholder="Insira a sua senha" autocomplete="off" required>
				</div>
			
				<div id="botao_direita">
					<button type="submit" class="btn btn-sm btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="espaçamento">
		<center>
			<small>Você não possui cadastro? Clique <a href="telas/usuario/cadastro_usuario_inativo.php"> aqui</a></small>
		</center>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>