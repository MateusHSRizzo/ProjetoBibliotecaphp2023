<?php

namespace MODEL;

class Livros {
    private ?int $cod;
    private ?string $nome;
    private ?string $genero;
    private ?int $data_de_lancamento;
    private ?string $autor;
    private ?string $editora;
    


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

    public function setnome(int $nome){
        $this->nome = $nome;
    }

    public function getgenero(){
        return $this->genero;
    }

    public function setgenero(int $genero){
        $this->nome = $genero;
    }
    
    public function getdata_de_lancamento(){
        return $this->data_de_lancamento;
    }

    public function setdata_de_lancamento(int $data_de_lancamento){
        $this->nome = $data_de_lancamento;
    }

    public function getautor(){
        return $this->autor;
    }

    public function setautor(int $autor){
        $this->nome = $autor;
    }

    public function geteditora(){
        return $this->editora;
    }

    public function seteditora(int $editora){
        $this->nome = $editora;
    }




}
?>