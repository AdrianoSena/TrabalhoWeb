<?php 
include_once 'conexao.php';


$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$conexao = new Conexao;

function cadastrarCliente($nome,$login,$senha,$email,$cpf,$conexao){
	$query = "insert into clientes (nome,login,senha,email,cpf) values('{$nome}','{$login}','{$senha}','{$email}','{$cpf}')";
	return mysqli_query($conexao->abrirConexao(), $query);
        
}

if(cadastrarCliente($nome,$login,$senha,$email,$cpf,$conexao)){
	echo "<p>Cliente $nome cadastrado com sucesso </p>";
        //$conexao->fechaConexao();
} else {
	$msg = mysqli_error($conexao);
	echo "<p>Ocorreu algum erro : $msg </p>";
}
 ?>