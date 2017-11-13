<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <script>
        function erro(){
            alert("Usuario ou senha inválido");
            window.location.replace("login.html");
        }
    </script>
    
    <?php
    
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
    
            
        /*==============================*\
            CONEXAO SOBRINHO CERTIFY
        \*==============================*/    
      
        $con =  mysqli_connect('localhost','root','','normandy');
        

        $query = "INSERT INTO usuarios ('login','senha','nome', 'email', 'cpf') VALUES ('{$login}','{$senha}','{$nome}','{$email}','{$cpf}')";
         

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        /*
        if (!mysqli_query($con, $query) {
            printf("Errormessage: %s\n", mysqli_error($con));
        }
        */
    
    ?>
</body>
</html>