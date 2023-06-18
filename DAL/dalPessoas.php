<?php
    namespace DAL;
    include_once 'conexao.php';
<<<<<<< HEAD
    include 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Pessoas.php';
=======
    include '../MODEL/Pessoas.php';
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

    class dalPessoas{

        public function Select(){
<<<<<<< HEAD
            $listapessoas = array();
=======
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
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
<<<<<<< HEAD
                $pessoas->settelefone($linha['Telefone']);
                $listapessoas[] = $pessoas;
            }
            return $listapessoas;
        }
        public function Selectcod(int $cod){
            $sql = "select * from pessoas where cod=?;";
=======
                $pessoas->settelefone($linha['telefone']);
                $listapessoas[] = $pessoas;

                return $listapessoas;
            }
        }
        public function Selectcod(int $cod){
            $sql = "select * from livros where cod=?;";
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
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
<<<<<<< HEAD
            $pessoas->settelefone($linha['Telefone']);

            return $pessoas;
=======
            $pessoas->settelefone($linha['telefone']);

            return $pessoas; 


>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        }

        public function Insert(\MODEL\Pessoas $pessoas){
            $con = Conexao::conectar(); 
<<<<<<< HEAD
            $sql = "INSERT INTO pessoas(cod, nome, rua, bairro, cpf, Telefone)VALUES('{$pessoas->getcod()}', '{$pessoas->getnome()}', '{$pessoas->getrua()}', '{$pessoas->getbairro()}', '{$pessoas->getcpf()}', '{$pessoas->gettelefone()}';";
=======
            $sql = "INSERT INTO pessoas (cod, nome, rua, bairro, cpf, telefone) 
                   VALUES  ('{$pessoas->getcod()}', 
                            '{$pessoas->getnome()}',
                            '{$pessoas->getrua()}',
                            '{$pessoas->getbairro()}',
                            '{$pessoas->getcpf()}',
                            '{$pessoas->gettelefone()}';";
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
<<<<<<< HEAD
        }

        public function Update(\MODEL\Pessoas $pessoas){
            $sql = "UPDATE livros SET nome=?, rua=?, bairro=?, cpf=?, Telefone=? WHERE id=?";
=======


        }

        public function Update(\MODEL\Pessoas $pessoas){
            $sql = "UPDATE livros SET nome=?, rua=?, bairro=?, cpf=?, telefone=? WHERE id=?";
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($pessoas->getnome(), $pessoas->getrua(), $pessoas->getbairro(), $pessoas->getcpf(), $pessoas->gettelefone()));
            $con = Conexao::desconectar();
            return  $result; 
<<<<<<< HEAD
=======

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        }

        public function Delete(int $cod){
            $sql = "DELETE from pessoas WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();
            return  $result; 
<<<<<<< HEAD
=======

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        }
    }

?>