<?php 
class Conexao {
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private $con;
    private static $instancia; 

    private function __construct() {
        $this->servidor = "localhost";
        $this->banco = "normandy";
        $this->usuario = "root";
        $this->senha = "";
        try{
            $this->con = new mysqli($this->servidor,$this->usuario,$this->senha);
        }catch(Exception $ex){
            echo "Erro na conexão";
        }

        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                 E_USER_ERROR);
        }
    }
    

    public static function getInstancia(){
        //verifica se o PDO é nulo, caso verdadeiro então é criada uma nova instancia
        if(!self::$instancia){
            $instancia = new Conexao();
            return $instancia;
        }else{
            return $instancia;
        }
    }

    public function getConexaoMysql() {
        return $this->con;
    }
}
?> 