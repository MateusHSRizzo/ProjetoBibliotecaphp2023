<?php
    namespace DAL;
    include_once 'conexao.php';
    include './MODEL/Editoras.php';

    class dalEditora{

        public function Select(){
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
                $editoras->setpais($linha['pais']);
                $listaeditora[] = $editoras;

                return $listaeditora;
            }

            


        }

        public function Selectcod(int $cod){

        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }
    }

    
?>