<?php
    namespace DAL;
    include_once 'conexao.php';
    include './MODEL/Pessoas.php';

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
    }

?>