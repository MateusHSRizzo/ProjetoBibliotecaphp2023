<?php

namespace MODEL;

class Livros {
<<<<<<< HEAD
    private ?int $cod = null;
    private ?string $nome = null;
    private ?int $n_paginas = null;
    private ?int $data_de_lancamento = null;
    private ?string $autor = null;
    private ?string $editora = null;
=======
    private ?int $cod;
    private ?string $nome;
    private ?string $genero;
    private ?int $data_de_lancamento;
    private ?string $autor;
    private ?string $editora;
    

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

    public  function __construct()
    {
       
    }

    public function getcod(){
        return $this->cod;
    }

    public function setcod(int $cod){
        $this->cod = $cod;
    }

    public function getnome(){
        return $this->nome;
    }

<<<<<<< HEAD
    public function setnome(string $nome){
        $this->nome = $nome;
    }

    public function getn_paginas(){
        return $this->n_paginas;
    }

    public function setn_paginas(int $n_paginas){
        $this->n_paginas = $n_paginas;
=======
    public function setnome(int $nome){
        $this->nome = $nome;
    }

    public function getgenero(){
        return $this->genero;
    }

    public function setgenero(int $genero){
        $this->nome = $genero;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    }
    
    public function getdata_de_lancamento(){
        return $this->data_de_lancamento;
    }

    public function setdata_de_lancamento(int $data_de_lancamento){
<<<<<<< HEAD
        $this->data_de_lancamento = $data_de_lancamento;
=======
        $this->nome = $data_de_lancamento;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    }

    public function getautor(){
        return $this->autor;
    }

<<<<<<< HEAD
    public function setautor(string $autor){
        $this->autor = $autor;
=======
    public function setautor(int $autor){
        $this->nome = $autor;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    }

    public function geteditora(){
        return $this->editora;
    }

<<<<<<< HEAD
    public function seteditora(string $editora){
        $this->editora = $editora;
    }
=======
    public function seteditora(int $editora){
        $this->nome = $editora;
    }




>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
}
?>