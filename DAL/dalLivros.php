<?php
    namespace DAL;
    include_once 'conexao.php';
    include './MODEL/Livros.php';

    class dalLivros{

        public function Select(){
            $sql = "select * from livros;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            //return $listalivros;

            foreach($result as $linha){
                $livros = new \MODEL\Livros();

                $livros->setcod($linha['cod']);
                $livros->setnome($linha['nome']);

                $listalivros[] = $livros;

                return $listalivros;
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