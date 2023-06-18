<?php

namespace MODEL;

class Editora {
    private ?int $cod;
    private ?string $nome;
    private ?string $rua;
    private ?string $bairro;
<<<<<<< HEAD
    private ?string $cnpj;
=======
    private ?int $cnpj;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    private ?string $telefone;
    private ?string $email;
    private ?string $cidade;
    private ?string $estado;
<<<<<<< HEAD
=======
    private ?string $pais;
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

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
        $this->rua = $rua;
    }

    public function setbairro(string $bairro){
=======
    public function setrua(int $rua){
        $this->rua = $rua;
    }

    public function setbairro(int $bairro){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->bairro = $bairro;
    }

    public function getbairro(){
        return $this->bairro;
    }

<<<<<<< HEAD
    public function setcnpj(string $cnpj){
=======
    public function setcnpj(int $cnpj){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->cnpj = $cnpj;
    }

    public function getcnpj(){
        return $this->cnpj;
    }

<<<<<<< HEAD
    public function settelefone(string $telefone){
=======
    public function settelefone(int $telefone){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->telefone = $telefone;
    }

    public function gettelefone(){
        return $this->telefone;
    }

<<<<<<< HEAD
    public function setemail(string $email){
=======
    public function setemail(int $email){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->email = $email;
    }

    public function getemail(){
        return $this->email;
    }

<<<<<<< HEAD
    public function setcidade(string $cidade){
=======
    public function setcidade(int $cidade){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->cidade = $cidade;
    }

    public function getcidade(){
        return $this->cidade;
    }

<<<<<<< HEAD
    public function setestado(string $estado){
=======
    public function setestado(int $estado){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        $this->estado = $estado;
    }

    public function getestado(){
        return $this->estado;
    }
<<<<<<< HEAD
=======

    public function setpais(int $pais){
        $this->pais = $pais;
    }

    public function getpais(){
        return $this->pais;
    }
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
}

?>