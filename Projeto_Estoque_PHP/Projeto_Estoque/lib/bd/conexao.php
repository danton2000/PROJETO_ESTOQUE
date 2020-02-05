<?php 
$servername = "localhost";//padrão = server local
$database = "bd_estoque";//alterar conforme o banco de dados
$username = "root";// Usuário padrão - root
$password = "";// senha de conexão do banco de dados.

//CRIANDO A CONEXÃO 
$conexao = mysqli_connect($servername, $username, $password, $database);

$conn = new PDO("mysql:host=localhost; dbname=bd_estoque", "root", "");

// $stmt = $conn ->prepare("INSERT INTO tb_ (nome, senha) VALUES (:NOME, :SENHA)");

// $nome = "danton";
// $senha = "123";

// $stmt->bindParam(":LOGIN", $login);
// $stmt->bindParam(":SENHA", $senha);

// $stmt->execute();

?>