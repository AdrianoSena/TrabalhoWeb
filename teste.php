
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
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
$clientes = $acao->select($con,"clientes");
?>

<table class="table table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Login</th>
		<th>Senha</th>
		<th>Email</th>
		<th>CPF</th>
	</tr>
	<?php 
		foreach ($clientes as $cliente) {
	 ?>
	<tr>
		<td><?= $cliente['id']?></td>
		<td><?= $cliente['nome']?></td>
		<td><?= $cliente['login']?></td>
		<td><?= $cliente['senha']?></td>
		<td><?= $cliente['email']?></td>
		<td><?= $cliente['cpf']?></td>
	</tr>

	<?php 
	}
	 ?>
</table>
	
</body>
</html>

