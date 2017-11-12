<?php 

function cadastrarCliente($nome,$login,$senha,$email,$cpf,$conexao){
	$query = "insert into clientes (nome,login,senha,email,cpf) values('{$nome}','{$login}','{$senha}','{$email}','{$cpf}')";
	return mysqli_query($conexao, $query);
}

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];

$conexao = mysqli_connect('localhost','root','','normandy');


if(cadastrarCliente($nome,$login,$senha,$email,$cpf,$conexao)){
	echo "<p>Cliente $nome cadastrado com sucesso </p>";
} else {
	$msg = mysql_error($conexao);
	echo "<p>Ocorreu algum erro : $msg </p>";
}





 ?>