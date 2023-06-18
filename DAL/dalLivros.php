<?php
    namespace DAL;
    include_once 'conexao.php';
<<<<<<< HEAD
    include 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Livros.php';
=======
    include '../MODEL/Livros.php';
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

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
<<<<<<< HEAD
                $livros->setn_paginas($linha['n_paginas']);
=======
                $livros->setgenero($linha['genero']);
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
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
<<<<<<< HEAD
=======

            $livros = new \MODEL\Livros(); 
            $livros->setcod($linha['cod']);
            $livros->setnome($linha['nome']);
            $livros->setgenero($linha['genero']);
            $livros->setdata_de_lancamento($linha['data_de_lancamento']);
            $livros->setautor($linha['autor']);
            $livros->seteditora($linha['editora']);

         

            return $livros; 

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

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
<<<<<<< HEAD
            $sql = "INSERT INTO livros (cod, nome, n_paginas, data_de_lancamento, autor, editora) 
                   VALUES  ('{$livros->getcod()}', 
                            '{$livros->getnome()}',
                            '{$livros->getn_paginas()}',
=======
            $sql = "INSERT INTO livros (cod, nome, genero, data_de_lancamento, autor, editora) 
                   VALUES  ('{$livros->getcod()}', 
                            '{$livros->getnome()}',
                            '{$livros->getgenero()}',
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
                            '{$livros->getdata_de_lancamento()}',
                            '{$livros->getautor()}',
                            '{$livros->geteditora()}';";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
<<<<<<< HEAD
        }

        public function Update(\MODEL\Livros $livros){
            $sql = "UPDATE livros SET nome=?, n_paginas=?, data_de_lancamento=?, autor=?, editora=? WHERE id=?";
=======


        }

        public function Update(\MODEL\Livros $livros){
            $sql = "UPDATE livros SET nome=?, genero=?, data_de_lancamento=?, autor=?, editora=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($livros->getnome(), $livros->getgenero(), $livros->getdata_de_lancamento(), $livros->getautor(), $livros->geteditora()));
            $con = Conexao::desconectar();
            return  $result; 
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($livros->getnome(), $livros->getn_paginas(), $livros->getdata_de_lancamento(), $livros->getautor(), $livros->geteditora()));
            $con = Conexao::desconectar();
            return  $result; 
        }

        public function Delete(int $cod){
            $sql = "DELETE from livros WHERE id=?";
<<<<<<< HEAD
=======

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();
            return  $result; 
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cod));
            $con = Conexao::desconectar();
            return  $result; 
        }
    }
