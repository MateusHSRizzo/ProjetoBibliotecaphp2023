<?php
    namespace DAL;
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Livros.php';

    class dalLivros{
        public function Select(){
            $listalivros = array();
            $sql = "select * from livros;";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao:: desconectar();

            foreach($result as $linha){
                $livros = new \MODEL\Livros();
                $livros->setcod($linha['cod']);
                $livros->setnome($linha['nome']);
                $livros->setn_paginas($linha['n_paginas']);
                $livros->setdata_de_lancamento($linha['data_de_lancamento']);
                $livros->setautor($linha['autor']);
                $livros->seteditora($linha['editora']);
                $listalivros[] = $livros;
            }
            return $listalivros;
        }

        public function Selectcod(int $cod){
            $sql = "select * from livros where cod=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($cod));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 
            $livros = new \MODEL\Livros(); 
            $livros->setcod($linha['cod']);
            $livros->setnome($linha['nome']);
            $livros->setn_paginas($linha['n_paginas']);
            $livros->setdata_de_lancamento($linha['data_de_lancamento']);
            $livros->setautor($linha['autor']);
            $livros->seteditora($linha['editora']);

            return $livros; 
        }

        public function Insert(\MODEL\Livros $livros){
            $con = Conexao::conectar(); 
            $sql = "insert into livros(nome, n_paginas, data_de_lancamento, autor, editora)values('{$livros->getnome()}', '{$livros->getn_paginas()}', '{$livros->getdata_de_lancamento()}', '{$livros->getautor()}', '{$livros->geteditora()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
        }

        public function Update(\MODEL\Livros $livros){
            $sql = "update livros set nome=?, n_paginas=?, data_de_lancamento=?, autor=?, editora=? where cod=?;";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($livros->getnome(), $livros->getn_paginas(), $livros->getdata_de_lancamento(), $livros->getautor(), $livros->geteditora(), $livros->getcod()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $cod){
            $sql = "delete from livros where cod=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();
            return  $result; 
        }
    }
?>
