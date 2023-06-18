<?php

namespace MODEL;

class Pessoas {
    private ?int $cod;
    private ?string $nome;
    private ?string $rua;
    private ?string $bairro;
<<<<<<< HEAD
    private ?string $cpf;
    private ?string $telefone;

    public function __construct(){}
=======
    private ?int $cpf;
    private ?string $telefone;

    public function __construct()
    {
        
    }
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

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
=======
    public function setnome(int $nome){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->nome = $nome;
    }

    public function getrua(){
        return $this->rua;
    }

<<<<<<< HEAD
    public function setrua(string $rua){
=======
    public function setrua(int $rua){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->rua = $rua;
    }

    public function getbairro(){
        return $this->bairro;
    }

<<<<<<< HEAD
    public function setbairro(string $bairro){
=======
    public function setbairro(int $bairro){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->bairro = $bairro;
    }

    public function getcpf(){
        return $this->cpf;
    }

<<<<<<< HEAD
    public function setcpf(string $cpf){
        $this->cpf = $cpf;
=======
    public function setcpf(int $cpf){
        $this->cod = $cpf;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    }

    public function gettelefone(){
        return $this->telefone;
    }

<<<<<<< HEAD
    public function settelefone(string $telefone){
        $this->telefone = $telefone;
    }
=======
    public function settelefone(int $telefone){
        $this->cod = $telefone;
    }


>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
}

 ?>