<?php 
$servername = "localhost";//padrão = server local
$database = "bd_estoque";//alterar conforme o banco de dados
$username = "root";// Usuário padrão - root
$password = "";// senha de conexão do banco de dados.

//CRIANDO A CONEXÃO 
$conexao = mysqli_connect($servername, $username, $password, $database);


 ?>