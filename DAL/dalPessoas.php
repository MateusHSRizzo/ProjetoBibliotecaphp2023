<?php
    namespace DAL;
    include_once 'conexao.php';
    include '../MODEL/Pessoas.php';

    class dalPessoas{

        public function Select(){
            $sql = "select * from pessoas;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            foreach($result as $linha){
                $pessoas = new \MODEL\Pessoas();

                $pessoas->setcod($linha['cod']);
                $pessoas->setnome($linha['nome']);
                $pessoas->setrua($linha['rua']);
                $pessoas->setbairro($linha['bairro']);
                $pessoas->setcpf($linha['cpf']);
                $pessoas->settelefone($linha['telefone']);
                $listapessoas[] = $pessoas;

                return $listapessoas;
            }
        }
        public function Selectcod(int $cod){
            $sql = "select * from livros where cod=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($cod));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $pessoas = new \MODEL\Pessoas(); 
            $pessoas->setcod($linha['cod']);
            $pessoas->setnome($linha['nome']);
            $pessoas->setrua($linha['rua']);
            $pessoas->setbairro($linha['bairro']);
            $pessoas->setcpf($linha['cpf']);
            $pessoas->settelefone($linha['telefone']);

            return $pessoas; 


        }

        public function Insert(\MODEL\Pessoas $pessoas){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO pessoas (cod, nome, rua, bairro, cpf, telefone) 
                   VALUES  ('{$pessoas->getcod()}', 
                            '{$pessoas->getnome()}',
                            '{$pessoas->getrua()}',
                            '{$pessoas->getbairro()}',
                            '{$pessoas->getcpf()}',
                            '{$pessoas->gettelefone()}';";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 


        }

        public function Update(\MODEL\Pessoas $pessoas){
            $sql = "UPDATE livros SET nome=?, rua=?, bairro=?, cpf=?, telefone=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($pessoas->getnome(), $pessoas->getrua(), $pessoas->getbairro(), $pessoas->getcpf(), $pessoas->gettelefone()));
            $con = Conexao::desconectar();
            return  $result; 

        }

        public function Delete(int $cod){
            $sql = "DELETE from pessoas WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();
            return  $result; 

        }
    }

?>