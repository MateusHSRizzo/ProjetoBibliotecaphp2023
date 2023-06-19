<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Autores.php';

    class dalAutores{
        public function Select(){
            $listaautores = array();
            $sql = "select * from autores;";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            foreach($result as $linha){
                $autores = new \MODEL\Autores();
                $autores->setcod($linha['cod']);
                $autores->setnome($linha['nome']);
                $listaautores[] = $autores;
            }
            return $listaautores;
        }

        public function Selectcod(int $cod){
            $sql = "select * from autores where cod=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($cod));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 
            $autores = new \MODEL\autores(); 
            $autores->setcod($linha['cod']);
            $autores->setnome($linha['nome']); 

            return $autores; 
        }

        public function Insert(\MODEL\Autores $autores){
            $con = Conexao::conectar(); 
            $sql = "insert into autores(nome)values('{$autores->getnome()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            return $result; 
        }

        public function Update(\MODEL\Autores $autores){
            $sql = "update autores set nome=? where cod=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($autores->getnome(), $autores->getcod()));
            $con = Conexao::desconectar();

            return  $result; 
        }

        public function Delete(int $cod){
            $sql = "delete from autores where cod=?;";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();

            return  $result; 
        }
    }
?>