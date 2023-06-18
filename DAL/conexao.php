<?php 
    namespace DAL;

use PDO;

class Conexao{
    private static $dbNome = 'biblioteca';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $cont = null;

    public function __construct()
    {
        die("A função init não é permitida");
    }

    public static function conectar(){
        if (self::$cont == null){
            try{
                self::$cont = new \PDO("mysql:host=". self::$dbHost .";dbname=" . self::$dbNome, self::$dbUsuario, self::$dbSenha);
<<<<<<< HEAD
=======
                echo 'aqui';
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
            }
            catch (\PDOException $exception) {
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