<?php 
class Conexao {
    private static $con;
    
    
    public static function abrirConexao(){
        try {
            $con = mysqli_connect('localhost','root','','normandy');
            return $con;
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
    static function getCon() {
        return self::$con;
    }

        public static function fechaConexao(){
            try {
                mysqli_close(self::$con);
            } catch (Exception $ex) {
                echo $ex;
            }
    }    
}

?> 