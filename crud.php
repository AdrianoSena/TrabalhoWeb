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
            $clientes = array();
            while($fetch = mysqli_fetch_assoc($result)){
                array_push($clientes, $fetch);
            }
            return $clientes;
        }
        
        /**
         * [selectById description]
         * @param  [type] $conn   [description]
         * @param  [type] $tabela [description]
         * @param  [type] $id     [description]
         * @return [type]         [description]
         */
        
        public function selectById($conn,$tabela,$id){
            $query = "SELECT * From ".$tabela." WHERE id='{$id}'";
            $result = mysqli_query($conn->abrirConexao(),$query);
            $clientes = array();
            while($fetch = mysqli_fetch_assoc($result)){
                array_push($clientes, $fetch);
            }
            return $clientes;

        }
    }

?>