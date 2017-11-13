<?php
include_once 'conexao.php';
include_once 'crud.php';
$con = new Conexao;
$acao = new CrudClientes;

$id = 24;
$nome = "lucasMenchone";
$login = "l.menchone";
$senha = "random";
$email = "email@email.com";
$cpf = "000.000.000-00";

//$acao->update($con,$id,$nome,$login,$senha,$email,$cpf);
//$acao->delete($con,$id);
//$acao->selectById($con,"clientes");
$acao->selectById($con,"clientes",25);
?>