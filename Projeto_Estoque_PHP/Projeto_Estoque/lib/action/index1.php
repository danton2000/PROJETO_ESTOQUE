<?php  

include '../bd/conexao.php';//Pegando a conexão com BD
include '../script/password.php';

$login_usuario = $_POST['login_usuario'];//guardando os valores dos campos e colocando em variaveis $.
$senha_login = $_POST['senha_login'];

$sql = "SELECT email_usuario,senha_usuario,status FROM tb_usuario WHERE email_usuario = '$login_usuario'";//and status = 'Ativo';

$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {

	$status = $array['status'];
	$senha_usuario = $array['senha_usuario'];
	// $nome_login = $array['nome_login'];
	$login_usuario = $array['email_usuario'];
	$senhacodificada = sha1($senha_login);

	if ($total > 0) {
		if($senhacodificada == $senha_usuario && $status == 'Ativo'){
			
			session_start();
			$_SESSION['login_usuario'] = $login_usuario;
			
			header('location: ../../telas/tela_inicial.php');
		}elseif($senhacodificada == $senha_usuario && $status == 'Inativo'){
			header('location: erro2.php');
		}else{
			header('location: erro.php');
		}

	}else{
		header('location: erro.php');

	}
		
}

?>

