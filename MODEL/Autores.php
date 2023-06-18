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

    public function setnome(string $nome){
        $this->nome = $nome;
    }
}

?>