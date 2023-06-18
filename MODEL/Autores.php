<?php

namespace MODEL;

class Autores {
    private ?int $cod;
    private ?string $nome;

    public function __construct()
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
=======
    public function setnome(int $nome){
        $this->nome = $nome;
    }

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
}

?>