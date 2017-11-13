<?php
    include_once 'conexao.php';
    Class CrudClientes{
    
        public function update($conn,$id,$nome, $login, $senha, $email,$cpf) {
            
            $query = "UPDATE clientes SET nome='{$nome}',login='{$login}',senha='{$senha}',"
                    . "email='{$email}',cpf='{$cpf}' WHERE id='{$id}'";
            return mysqli_query($conn->abrirConexao(), $query);
        }
        
        public function delete($conn,$id){
            $query = "DELETE FROM clientes where id='{$id}'";
            return mysqli_query($conn->abrirConexao(), $query);
        }
        
        public function select($conn,$tabela){
            $query = "SELECT * From ".$tabela;
            $result = mysqli_query($conn->abrirConexao(),$query);
            while($fetch = mysqli_fetch_row($result)){
            echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . $fetch[2] . " - " . $fetch[3] . " - " . $fetch[4] . " - " . $fetch[5]. "</p>";
            }
        }
        
        public function selectById($conn,$tabela,$id){
                        $query = "SELECT * From ".$tabela." WHERE id='{$id}'";
            $result = mysqli_query($conn->abrirConexao(),$query);
            while($fetch = mysqli_fetch_row($result)){
            echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . $fetch[2] . " - " . $fetch[3] . " - " . $fetch[4] . " - " . $fetch[5]. "</p>";
            }
        }
    }

?>