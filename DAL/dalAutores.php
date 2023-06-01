<?php
    namespace DAL;
    include_once 'conexao.php';
    include './MODEL/Autores.php';

    class dalAutores{

        public function Select(){
            $sql = "select * from autores;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            foreach($result as $linha){
                $autores = new \MODEL\Autores();

                $autores->setcod($linha['cod']);
                $autores->setnome($linha['nome']);
               
                $listaautores[] = $autores;

                return $listaautores;
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