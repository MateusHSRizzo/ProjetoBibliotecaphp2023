<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Editora.php';

    class dalEditora{
        public function Select(){
            $listaeditora = array();
            $sql = "select * from editoras;";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            foreach($result as $linha){
                $editoras = new \MODEL\Editora();
                $editoras->setcod($linha['cod']);
                $editoras->setnome($linha['nome']);
                $editoras->setrua($linha['rua']);
                $editoras->setbairro($linha['bairro']);
                $editoras->setcnpj($linha['cnpj']);
                $editoras->settelefone($linha['telefone']);
                $editoras->setemail($linha['email']);
                $editoras->setcidade($linha['cidade']);
                $editoras->setestado($linha['estado']);
                $listaeditora[] = $editoras;
            }
            return $listaeditora;
        }

        public function Selectcod(int $cod){
            $sql = "select * from editoras where cod=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($cod));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 
            $editoras = new \MODEL\Editora(); 
            $editoras->setcod($linha['cod']);
            $editoras->setnome($linha['nome']); 
            $editoras->setrua($linha['rua']);
            $editoras->setbairro($linha['bairro']);
            $editoras->setcnpj($linha['cnpj']);
            $editoras->settelefone($linha['telefone']);
            $editoras->setemail($linha['email']);
            $editoras->setcidade($linha['cidade']);
            $editoras->setestado($linha['estado']);

            return $editoras; 
        }

        public function Insert(\MODEL\Editora $editoras){
            $con = Conexao::conectar(); 
            $sql = "insert into editoras(nome, rua, bairro, cnpj, telefone, email, cidade, estado)values('{$editoras->getnome()}', '{$editoras->getrua()}', '{$editoras->getbairro()}', '{$editoras->getcnpj()}', '{$editoras->gettelefone()}', '{$editoras->getemail()}', '{$editoras->getcidade()}', '{$editoras->getestado()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();

            return $result; 
        }

        public function Update(\MODEL\Editora $editoras){
            $sql = "update editoras SET nome=?, rua=?, bairro=?, cnpj=?, telefone=?, email=?, cidade=?, estado=? WHERE cod=?;";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($editoras->getnome(), $editoras->getrua(), $editoras->getbairro(), $editoras->getcnpj(), $editoras->gettelefone(), $editoras->getemail(), $editoras->getcidade(), $editoras->getestado(), $editoras->getcod()));
            $con = Conexao::desconectar();

            return  $result; 
        }

        public function Delete(int $cod){
            $sql = "delete from editoras where cod=?;";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();

            return  $result; 
        }
    } 
?>