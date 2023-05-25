<?php 

class Conexao{
    private static $dbNome = 'biblioteca';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $cont = null;

    public function __construct()
    {
        die("A função init não é permitida")
    }

    public static function conctar(){
        if (self::$cont == null){
            try{
                self::$cont = new PDO("mysql:host=". self::$dbhost .";dbname= " . $dbnome , self::$dbUsuario, self::$dbsenha)

            }
            catch (PDOException $exception) {
                die ($exception->getMessage());

            }
           
        }
        return self::$cont;
    }

    public static function desconectar() {
        self::$cont = null;
    }
    
}

?>