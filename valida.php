
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
    if($_POST['user'] =="admin" and $_POST['pass'] == "senha"){
        header('location: user_area.html');
    } else {
        echo "<script>erro()</script>";
    }
?>
</body>
</html>

