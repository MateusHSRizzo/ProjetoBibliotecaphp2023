<?php

namespace MODEL;

class Pessoas {
    private ?int $cod;
    private ?string $nome;
    private ?string $rua;
    private ?string $bairro;
    private ?int $cpf;
    private ?string $telefone;

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

    public function setnome(int $nome){
        $this->nome = $nome;
    }

    public function getrua(){
        return $this->rua;
    }

    public function setrua(int $rua){
        $this->rua = $rua;
    }

    public function getbairro(){
        return $this->bairro;
    }

    public function setbairro(int $bairro){
        $this->bairro = $bairro;
    }

    public function getcpf(){
        return $this->cpf;
    }

    public function setcpf(int $cpf){
        $this->cod = $cpf;
    }

    public function gettelefone(){
        return $this->telefone;
    }

    public function settelefone(int $telefone){
        $this->cod = $telefone;
    }


}

 ?>